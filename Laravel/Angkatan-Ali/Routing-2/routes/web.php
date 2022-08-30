<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------------=----------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/hallo', function () {
    return 'hello world';
});

route::get('/belajar', function() {
    echo 'belajar laravel <br>';
    echo 'sampe jadi jago';
});

route::get('/mahasiswa/fasilkom/anto', function () {
    echo "<h1 style='text-align: center;'><u>Welcome Anto</u></h1>";
});

// Route Parameter /mahasiswa/{nama} = parameter
route::get("/mahasiswa/{nama}", function ($nama) {
    return "tampilkan data mahasiswa bernama $nama";
});

route::get("/stok barang/{jenis}/{merek}", function ($jenis, $merek) {
    return "Cek stok dari barang $jenis dengan merek $merek";
});

// Optional Parameter '?'
route::get("stok/{jenis?}/{merek?}", function ($a = 'smartphone', $b = 'samsung') {
    return "$a apa $b";
});

// Route Regular Expression
route::get("/user/{id}", function ($id) {
    if ($id < 5) {
        return "Tampilkan user dengan id = $id";
    } else {
        return "Tampilkan user dengan ketua $id";
    }
}) -> where ('id', '[A-Za-z]{4}[0-9]+');

// Route Redirect
route::get("/hubungi-kami", function () {
    echo "Anda harus menghubungi kami";
});

route::redirect("/contact-us", "hubungi-kami");

// Route Group
route::prefix('/admin')->group(function () {
    route::get("/admin/mahasiswa", function () {
        return "Pendaftaran mahasiswa";
    });

    route::get("/admin/dosen", function () {
        return "Pendaftaran dosen";
    });

    route::get("/admin/karyawan", function () {
        return "Pendaftaran karyawan";
    });
});

// Route fallback
route::fallback(function () {
    return "halaman tidak ditemukan";
});

// Route Priority tanpa parameter
route::get("/buku/{a}", function ($a) {
    return "buku saya $a";
});

route::get("/buku/{b}", function ($b) {
    return "buku kita $b";
});

route::get("/buku/{c}", function ($c) {
    return "<style>body{background:#212121;color:white}</style>buku mereka $c";
});
