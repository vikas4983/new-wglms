<?php

namespace App\Providers;

use App\Services\CountService;
use Illuminate\Pagination\Paginator;
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

    public function boot(): void
    {
        if ($this->app->runningInConsole() || $this->app->environment('testing')) {
            return;
        }

        Paginator::useBootstrapFive();
        $modelCount = app(CountService::class)->getCount();
        View::share('count', $modelCount ?? '');
        
       
    }
}
