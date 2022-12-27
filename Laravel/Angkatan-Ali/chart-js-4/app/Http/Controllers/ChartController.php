<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function chart(Request $request)
    {	

		$price = Product::whereIn('name',['Kucing', 'Anjing', 'Babi'])->sum('price');
		// $price = Product::all()->count();
		// $price = DB::table('products')->find(2);
    	return view('chart',compact('price'));}
}