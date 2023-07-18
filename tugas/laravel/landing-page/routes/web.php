<?php

use App\Models\Article;
use App\Models\Product;
use App\Models\Costumer;
use App\Models\Testimonial;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WebsiteController;
use App\Models\Officer;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/', function (){
        return view('auth.login');
    });

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/home', [WebsiteController::class, 'productsIndex'])->name('home');

    Route::get('/about_us', [WebsiteController::class, 'aboutUsIndex']);

    Route::get('/contact_us', function () {
        return view('landing_page.contact_us');
    });

    Route::post('/',[LoginController::class, 'login'])->name('login');

    Route::get('/dashboard', function () {
        return view('index', [
            'product'       => count(Product::all()),
            'article'       => count(Article::all()),
            'costumer'      => count(Costumer::all()),
            'testimonial'   => count(Testimonial::all()),
            'story'         => count(Story::all()),
            'officer'       => count(Officer::all()),
        ]);
    })->name('dashboard');

    Route::resource('products', ProductController::class);

    Route::resource('articles', ArticleController::class);

    Route::resource('costumers', CostumerController::class);

    Route::resource('testimonials', TestimonialController::class);

    Route::resource('stories', StoryController::class);

    Route::resource('officers', OfficerController::class);

    Auth::routes();

