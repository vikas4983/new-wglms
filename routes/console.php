<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::command('invitation:reminder')
    ->timezone('Asia/Kolkata')
    ->when(fn () => now()->toDateString() === '2026-02-03')
    ->at('09:00');
Schedule::command('invitation:reminder')
    ->timezone('Asia/Kolkata')
    ->when(fn () => now()->toDateString() === '2026-02-04')
    ->at('09:00');



// Schedule::command('invitation:reminder')
//     ->timezone('Asia/Kolkata')
//     ->when(fn () => now()->toDateString() === '2026-02-02')
//     ->at('20:00');

// Schedule::command('invitation:reminder')
//     ->timezone('Asia/Kolkata')
//     ->when(fn () => now()->toDateString() === '2026-02-05')
//     ->at('17:00');

// Schedule::command('invitation:reminder')
//     ->timezone('Asia/Kolkata')
//     ->when(fn () => now()->toDateString() === '2026-02-05')
//     ->at('18:00');

// Schedule::command('invitation:reminder')
//     ->timezone('Asia/Kolkata')
//     ->when(fn () => now()->toDateString() === '2026-02-05')
//     ->at('19:00');