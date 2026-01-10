<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\InvitationCardController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
})->name('register');
Route::get('register', function () {
    return view('welcome');
});
Route::post('submit-invitation', [WeddingController::class, 'store'])
    ->name('invitation.submit');
