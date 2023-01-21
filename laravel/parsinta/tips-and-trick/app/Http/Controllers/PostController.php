<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return 'Fecth all the posts';
    }
    public function show($post)
    {
        return $post;
    }
}
