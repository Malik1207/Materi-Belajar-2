<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\FormController;
use App\Http\Controllers\API\ScoreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'auth:sanctum'], function () {

  // Crud Student 
  Route::post('/create', [FormController::class, 'create']);
  Route::get('/edit/{id}', [FormController::class, 'edit']);
  Route::post('/edit/{id}', [FormController::class, 'update']);
  Route::get('/delete/{id}', [FormController::class, 'delete']);

  //  Crud Score with relation to Student
  Route::post('/create-score-student', [ScoreController::class, 'create']);
  Route::get('/data-student/{id}', [ScoreController::class, 'show']);
  Route::post('/data-student/{id}', [ScoreController::class, 'update']);

  Route::get('/logout', [AuthController::class, 'logout']);
});

Route::post('/login', [AuthController::class, 'login']);
