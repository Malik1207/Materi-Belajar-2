<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MahasiswaController;
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
    return view('welcome');
});

// Cara 2
Route::middleware('auth')->group(function(){
    Route::resource('mahasiswa',MahasiswaController::class);
});

Route::get('login', function() {
    view('auth.login');
})->name('login');

Route::get('register', function() {
    view('auth.register');
})->name('register');

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('proses/login', [LoginController::class, 'login'])->name('proses.login');

Route::post('proses/register', [LoginController::class, 'register'])->name('proses.register');
