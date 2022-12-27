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

// Route Parameter
route::get('/kampus/{jurusan}', function ($jurusan) {
    return "<h1>Selamat datang di jurusan $jurusan";
});

route::get('/sekolah/{kelas}', function ($kelas) {
    return "<h1>Selamat datang di kelas $kelas</h1>";
});

// Route dengan optional parameter
route::get('/kampus/{jurusan?}/{fakultas?}', function ($jurusan, $fakultas) {
    return "Di jurusan $jurusan ini kamu akan belajar $fakultas";
});

route::get('/sekolah/{kelas?}/{pelajaran?}', function ($kelas, $pelajaran) {
    return "Pada jam kelas $kelas ini kita akan belajar $pelajaran";
});

// Route parameter dengan regular exspression
route::get('/kampus/jurusan/{kelas}', function ($kelas) {
    return "ini adalah jurusan $kelas";
})-> where('kelas', '[0-9]');

route::get('/sekolah/kelas/{jam}', function ($jam) {
    return "dikelas ini akan belajar pada jam $jam";
})-> where('jam', '[0-9]');

// Route redirect
route::redirect('/jamkuliah', '/kampus/jurusan/kelas');
route::redirect('/upacara', '/sekolah/kelas/jam');

// Route Group
route::prefix('/dosen')-> group(function() {
    route::get('/jurusan', function () {
        echo "nama dosennya adalah agus";
    });

    route::get('/fakultas', function () {
        echo "nama jurusannya adalah seni";
    });

    route::get('/mahasiswa', function () {
        echo "nama mahasiswanya adalah joni";
    });
});

route::prefix('/guru')-> group(function() {
    route::get('/kelas', function () {
        echo "ini adalah kelas 8";
    });

    route::get('/nama', function () {
        echo "nama gurunya adalah ahmad";
    });

    route::get('/alamat', function () {
        echo "alamat gurunya berada dikota";
    });
});

// Route Fallback
route::fallback(function () {
    return "<style>background:yellow; color:red;</style>Halaman yang anda cari tidak ditemukan";
});

// Route Biasa
// route::get('/kampus', function () {
//     echo "selamat menumpuh pendidikan yang lebih tinggi";
// });

// route::get('/sekolah', function () {
//     echo "Selamat datang di sekolah yang indah ini";
// });
