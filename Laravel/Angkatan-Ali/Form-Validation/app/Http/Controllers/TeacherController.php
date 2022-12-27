<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher');
    }

    public function input(Request $request)
    {
        $request->all();

        $validasi = $request->validate([
            'name' => 'required|min:10|string',
            'birth' => 'required',
            'address' => 'required|min:12',
            'phone' => 'required|min:8|integer',
            'subject' => 'required|min:5'
        ]);

        dd($validasi);
        return "Data added succesfully";
    }
}
