<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['middleware' => 'mhs'], function() {
//     Route::get('tableMahasiswa', [MahasiswaController::class,'tableMahasiswa']);//->middleware('mhs');
//     Route::get('formMahasiswa', [MahasiswaController::class,'formMahasiswa']);
//     Route::get('createMahasiswa', [MahasiswaController::class,'createMahasiswa']);
// });

Route::get('tableMahasiswa', [MahasiswaController::class,'tableMahasiswa']);
Route::get('formMahasiswa', [MahasiswaController::class,'formMahasiswa']);
Route::get('createMahasiswa', [MahasiswaController::class,'createMahasiswa']);

