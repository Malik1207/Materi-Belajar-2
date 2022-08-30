<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

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

Route::get('/student', [StudentController::class, 'index']);
Route::get('/insert', [StudentController::class, 'insert']);
Route::get('/restore', [StudentController::class, 'restore']);
Route::get('/forcedelete', [StudentController::class, 'forceDelete']);
Route::get('/update', [StudentController::class, 'update']);
Route::get('/massupdate', [StudentController::class, 'massUpdate']);
Route::get('/destroy', [StudentController::class, 'destroy']);
Route::get('/massdestroy', [StudentController::class, 'massDestroy']);

route::get('/guru', [TeacherController::class, 'index']);
route::get('/buat', [TeacherController::class, 'insert']);
route::get('/edit', [TeacherController::class, 'update']);
route::get('/massedit', [TeacherController::class, 'massUpdate']);
route::get('/hapus', [TeacherController::class, 'destroy']);
route::get('/masshapus', [TeacherController::class, 'massDestroy']);
