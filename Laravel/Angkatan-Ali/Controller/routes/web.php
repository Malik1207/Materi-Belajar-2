<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\DataController;

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

// halaman home
Route::get('/home', [PageController::class, 'index']);

// halaman siswa
Route::get('pages/siswa', [PageController::class, 'siswa'])->name('pages.siswa');

// halaman welcome
Route::get('/welcome', [PageController::class, 'welcome']);


// route::get('/views/guru', function () {
//     return view('/halaman/guru');
// });

// Route::get('/views/siswa', function () {
//     return view('halaman/siswa');
// });

Route::get('/views/guru', [ViewController::class, 'guru'])->name('guru');

Route::get('/views/siswa', [ViewController::class, 'siswa'])->name('siswa');
