<?php

namespace App\Providers;

use App\Services\CountService;
use App\Services\WebPageService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(CountService::class, function () {
            return new CountService();
        });
    }

    public function boot(WebPageService $webPageService): void
    {
        if ($this->app->runningInConsole() || $this->app->environment('testing')) {
            return;
        }
        view::share('webContent', $webPageService->webpage());
        Paginator::useBootstrapFive();
        View::composer('*', function ($view) {
            if (Auth::check()) {
                $count = app(CountService::class)->getCount();
                $view->with('count', $count);
            }
        });
    }
}
