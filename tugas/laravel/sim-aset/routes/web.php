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
Route::get('/list-aset', function () {
    return view('master-data.list-aset');
});
Route::get('/kategori-aset', function () {
    return view('master-data.kategori-aset');
});
Route::get('/lokasi-aset', function () {
    return view('master-data.lokasi-aset');
});
Route::get('/user', function () {
    return view('master-data.user');
});
Route::get('/aset-berwujud', function () {
    return view('data-aset.aset-berwujud');
});
Route::get('/aset-dihapuskan', function () {
    return view('data-aset.aset-dihapuskan');
});
Route::get('/pengajuan', function () {
    return view('pengadaan.pengajuan');
});
Route::get('/list-data', function () {
    return view('pengadaan.list-data');
});
Route::get('/monitoring', function () {
    return view('monitoring');
});
Route::get('/penghapusan', function () {
    return view('penghapusan');
});
Route::get('/data-aset', function () {
    return view('laporan.data-aset');
});
Route::get('/laporan-penghapusan', function () {
    return view('laporan.laporan-penghapusan');
});
Route::get('/laporan-pengadaan', function () {
    return view('laporan.laporan-pengadaan');
});
Route::get('/qr-code', function () {
    return view('laporan.qr-code');
});
Route::get('/pengaturan', function () {
    return view('pengaturan');
});