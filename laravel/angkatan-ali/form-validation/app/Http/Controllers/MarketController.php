<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function index()
    {
        return view('market');
    }

    public function input(Request $request)
    {
        $request->all();

        $validasi = $request->validate([
            'name' => 'required|min:10|string',
            'owner' => 'required|min:5|string',
            'build' => 'required',
            'address' => 'required'
        ]);

        dd($validasi);
        return "Data added succesfully";
    }
}
