<?php

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

route::get('/siswa', function () {
    $nama = "joko";
    $score = [];
    // $score = 80;
    // return view('/siswa', compact('nama', 'score'));    // compact() untuk mengiim data
    return view('/siswa', ['nama' => $nama , 'score' => $score]);
});