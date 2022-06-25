<?php

use App\Http\Controllers\FrontRedirectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('auth')->get('dashboard', function() {
    $admin = request()->user()->hasRole('admin');

    if($admin) return redirect()->route('admin.dashboard');
    return redirect()->route('student.dashboard');
});

Route::get('/login', FrontRedirectController::class)->name('login');
