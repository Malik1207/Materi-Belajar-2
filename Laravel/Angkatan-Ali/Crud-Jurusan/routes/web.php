<?php

use App\Http\Controllers\SaleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/sidebar', function () {
    return view('layouts.sidebar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/', [SaleController::class, 'index']);
Route::resource('sales', SaleController::class);

Route::get('/',[SaleController::class, 'index'])->middleware('auth');
Route::resource('sales', SaleController::class);

Route::get('/sales/{sale}',[SaleController::class,'show'])
        ->name('sales.show')->middleware('auth')->middleware('can:view,sale');
