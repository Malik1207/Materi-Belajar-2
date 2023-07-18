<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Costumer;
use App\Models\Officer;
use App\Models\Product;
use App\Models\Story;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function productsIndex()
    {
        $products       = Product::paginate(8);

        $testimonials   = Testimonial::paginate(8);

        $articles       = Article::paginate(8);

        $costumers      = Costumer::paginate(8);

        $stories        = Story::paginate(8);

        $officers       = Officer::paginate(8);


        return view('landing_page.home', compact('products','testimonials','articles','costumers','stories','officers'));


    }

    public function aboutUsIndex()
    {
        $stories        = Story::paginate(8);

        $officers       = Officer::paginate(8);


        return view('landing_page.about_us', compact('stories','officers'));


    }
}
