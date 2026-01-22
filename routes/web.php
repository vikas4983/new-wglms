<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InvitationCardController;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
})->name('/');
Route::get('register', function () {
    return view('auth.login');
})->name('welcome');
Route::post('submit-invitation', [WeddingController::class, 'guestStore'])->name('invitation.submit');

