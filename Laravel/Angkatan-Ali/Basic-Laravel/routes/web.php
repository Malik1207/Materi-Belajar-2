<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

// route::get('/home', function() {
//     return view('/pages/home');
// });

// route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');


// route::get('/tugas/home', function () {
//     return view('/halaman/home');
// });

// Route::get('/tugas/teman', function () {
//     return view('halaman/teman');
// });

// route::get('/tugas/profile', function() {
//     return view('halaman.profile');
// });

Route::get('/tugas/home', [MahasiswaController::class, 'home'])->name('home');

Route::get('/tugas/teman', [MahasiswaController::class, 'teman'])->name('teman');

Route::get('/tugas/profile', [MahasiswaController::class, 'profile'])->name('profile');
