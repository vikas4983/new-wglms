<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\InvitationCardController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

// Route::fallback(function () {
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('auth.login');
});
Route::get('register', function () {
    return view('auth.login');
})->name('register');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('filter-keyword', [FilterController::class, 'filter'])->name('filter.keyword');
    Route::resource('weddings', WeddingController::class);
    Route::resource('webPages', WebPageController::class);
    Route::resource('events', EventController::class);
    Route::resource('invitationCards', InvitationCardController::class);
    Route::get('invited-guests', [WeddingController::class, 'invited'])
        ->name('invited.guests');
    Route::get('guest-added-by-admin', [WeddingController::class, 'guestByAdmin'])
        ->name('admin.guest');
    Route::get('guest-invited-by-admin', [WeddingController::class, 'guestInvitedByAdmin'])
        ->name('admin.invited');
    Route::post('invitation', [WeddingController::class, 'invitation'])->name('send.invitation');
});
Route::get('wedding-invitation', [WeddingController::class, 'guestCreate'])
    ->name('invitation.form');
Route::post('submit-invitation', [WeddingController::class, 'guestStore'])
    ->name('invitation.submit');
Route::get('marriage-invitation', [WeddingController::class, 'view'])
    ->name('view.webpage');
