<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\SchoolController;

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

// Route::get('/', [StudentController::class, 'index'])->name('index');
// Route::post('/prosses-kirim', [StudentController::class, 'store'])->name('store');

// tugas
route::get('/teacher', [TeacherController::class, 'index']);
Route::post('/teacher-input', [TeacherController::class, 'input'])->name('teacher.input');

Route::get('/market', [MarketController::class, 'index']);
Route::post('/market-input', [MarketController::class, 'input'])->name('market.input');

Route::get('/school', [SchoolController::class, 'index']);
Route::post('/school-input', [SchoolController::class, 'input'])->name('school.input');
