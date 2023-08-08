<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/login', ['uses' => 'AuthController@index']);

$router->group(['prefix' => 'api', 'middleware' => 'auth'], function() use ($router){
    $router->get('/category', ['uses' => 'CategoryController@index']);
    $router->get('/category/{id}', ['uses' => 'CategoryController@show']);
    $router->post('/category', ['uses' => 'CategoryController@store']);
    $router->put('/category/{id}', ['uses' => 'CategoryController@update']);
    $router->delete('/category/{id}', ['uses' => 'CategoryController@destroy']);

    $router->get('/customer', ['uses' => 'CustomerController@index']);
    $router->get('/customer/{id}', ['uses' => 'CustomerController@show']);
    $router->post('/customer', ['uses' => 'CustomerController@store']);
    $router->put('/customer/{id}', ['uses' => 'CustomerController@update']);
    $router->delete('/customer/{id}', ['uses' => 'CustomerController@destroy']);

    $router->get('/menu', ['uses' => 'MenuController@index']);
    $router->post('/menu', ['uses' => 'MenuController@store']);
});
