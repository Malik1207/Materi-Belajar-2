<?php

use Illuminate\Contracts\View\View;
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

Route::get('/school', function () {
    return view('/school/school');
});

// tugas
route::get('/tugas/sekolah', function () {
    return view('tugas/sekolah');
});

route::get('/tugas/kampus', function () {
    return view('tugas/kampus');
});

route::get('/tugas/perpus', function () {
    return view('tugas/perpus');
});

route::get('/tugas/masjid', function () {
    return view('tugas/masjid');
});

route::get('/tugas/rumah', function () {
    return view('tugas/rumah');
});

route::get('/tugas/ujian', function () {
    return view('tugas/ujian');
});

route::get('/tugas/warung', function () {
    return view('tugas/warung');
});

route::get('/tugas/bengkel', function () {
    return view('tugas/bengkel');
});

route::get('/tugas/hewan', function () {
    return view('tugas/hewan');
});

route::get('/tugas/produk', function () {
    return view('tugas/produk');
});
