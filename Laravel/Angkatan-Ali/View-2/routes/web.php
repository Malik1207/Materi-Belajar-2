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

// Argunment ke-2
// Route::get('/student', function () {
//     // return view('/universitas/mahasiswa',
//     // data dari web.php berbentuk array, jika dipanggil diview maka akan berubah menjadi variabel
//     $arrMahasiswa = [
//         "Risa Lestari",
//         "Agus Widodo",
//         "Riana Adelle",
//         "Rosalie Shafa"
//     ];

//     return view('/universitas/mahasiswa', ['mahasiswa' => $arrMahasiswa]);
// });


// method with();
// Route::get('/student', function () {
//     // $arrmahasiswa = [
//     //     "Risa Lestari",
//     //     "Agus Widodo",
//     //     "Riana Adelle",
//     //     "Rosalie Shafa"
//     // ];
//     // return view('universitas.mahasiswa')->with('mahasiswa1', $arrmahasiswa)

//     return view('universitas.mahasiswa')
//     ->withmahasiswa1('Risa Lestari')
//     ->withmahasiswa2('Riana Adel')
//     ->withmahasiswa3('Rosse');
// });


// function compact()
Route::get('/student', function () {
    $mahasiswa01 = "Rina Lestari";
    $mahasiswa02 = "Agung Wiyono";
    $mahasiswa03 = "Beni Abdurrahman";
    $mahasiswa04 = "Amelia Mustika";

    // return view('universitas.mahasiswa', compact(
    //     "mahasiswa01",
    //     "mahasiswa02",
    //     "mahasiswa03"
    // ));

    // function compact() dengan with()
    // compact() mengubah string menjadi array

    return view('universitas.mahasiswa')->with(compact(
        "mahasiswa01",
        "mahasiswa02",
        "mahasiswa03",
        "mahasiswa04"
    ));
});


// // with() dengan parameter
// Route::get('/mahasiswa/{nama}/{umur}/{asal}', function($nama, $umur, $asal) {
//     return view("universitas.mahasiswa")
//     ->with('nama' , $nama)
//     ->with('umur' , $umur)
//     ->with('asal' , $asal);
// });

// route::get('/mahasiswa', function () {
//     $arrmahasiswa = [
//         "Risa",
//         "Lestari",
//         "Budi",
//         "Bambang"
//     ];

//     return view('universitas.mahasiswa', ['mahasiswa' => $arrmahasiswa]);
// });
