<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;




Route::get('/', fn () => view('home'));

Route::view('contact','contact');

Route::view('about','about');

Route::get('profile', function(Request $request) {

    $name = $request->name;
    
    return view('profile', ['name' => $name]);
    
});