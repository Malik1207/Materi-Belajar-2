<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::prefix('posts')->name('posts.')->middleware('auth')->group(function () {
    Route::get('', [PostController::class, 'index'])->name('index')->withoutMiddleware('auth');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::get('{posts}', [PostController::class, 'show'])->name('show')->withoutMiddleware('auth');
    Route::post('', [PostController::class, 'store'])->name('store');
    Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
    Route::put('/{post}', [PostController::class, 'update'])->name('update');
    Route::delete('/{post}/delete', [PostController::class, 'destroy'])->name('destroy');
    // Route::resource('posts'. PostController::class);
});