<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostDetailResource;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index() {
        $posts = Post::all();

        // return response()->json(['data' => $posts]);
        return PostResource::collection($posts); // Format Array
    }

    function show($id) {
        $post = Post::with('writer:id,username')->findOrFail($id);
        return new PostDetailResource($post);
    }

    function eager_loading($id) {
        $post = Post::findOrFail($id);
        return new PostDetailResource($post);
    }
}
