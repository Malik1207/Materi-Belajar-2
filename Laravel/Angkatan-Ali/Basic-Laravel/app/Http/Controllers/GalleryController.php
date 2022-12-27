<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index() {
        $galleries = DB::table('gallery')->get();

        return view('pages/gallery', [
            'galleries' => $galleries
        ]);
    }
}
