<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\InvitationCardController;
use App\Http\Controllers\WeddingController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return view('wedding-invitation');
});
Route::get('/', function () {
    return view('wedding-invitation');
});
