<?php

use App\Http\Controllers\CreatePdfController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EmployeeController::class, 'showEmployees']);
Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);
