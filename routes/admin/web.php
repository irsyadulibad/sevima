<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\RoomController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth', 'role:admin')->group(function() {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('rooms/datatables', [RoomController::class, 'dt'])
        ->name('rooms.datatables');
    Route::resource('rooms', RoomController::class);

    Route::get('lessons/datatables', [LessonController::class, 'dt'])
        ->name('lessons.datatables');
    Route::resource('lessons', LessonController::class);
});

require __DIR__ . '/auth.php';
