<?php

use App\Http\Controllers\Student\DashboardController;
use App\Http\Controllers\Student\RoomController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:student')->group(function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('rooms')
        ->controller(RoomController::class)
        ->name('rooms.')
        ->group(function() {
            Route::get('/', 'index')->name('index');
            Route::get('{room}/join', 'join')->name('join');
            Route::get('{room}/leave', 'leave')->name('leave');
        });
});

require __DIR__ . '/auth.php';
