<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Article;

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

Route::get('/tutorial', function () {
    return view('tutorial');
});

Route::get('/users', function () {
    return view('users.index');
})->name('users.home');

Route::get('user/{id}', [UserController::class, 'show'])->name('users.details');
Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::get('article/{name}', Article::class)->name('article');

Route::get('/lifecycle', function () {
    return view('livewire.life-cycle');
});
