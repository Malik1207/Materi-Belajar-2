<?php

use App\Http\Controllers\Auth\{RegisterController, LoginController, LogoutController};
use App\Http\Controllers\{HomeController, DashboardController};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', action: HomeController::class)->name(name: 'home');
Route::get('/dashboard', DashboardController::class)->middleware('auth')->name('dashboard');
Route::post('/logout', LogoutController::class)->middleware('auth')->name('logout');

Route::middleware('guest')->group(function () {
   Route::get('register', [RegisterController::class, 'create'])->name('register');
   Route::post('register', [RegisterController::class, 'store']);
   Route::get('login', [LoginController::class, 'create'])->name('login');
   Route::post('login', [LoginController::class, 'store']);
});
