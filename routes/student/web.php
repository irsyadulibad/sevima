<?php

use App\Http\Controllers\Student\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:student')->group(function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
});

require __DIR__ . '/auth.php';
