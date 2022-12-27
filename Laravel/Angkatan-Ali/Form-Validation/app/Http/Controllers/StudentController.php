<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function store(Request $request)
    {
        $request->all();

        $validasi = $request->validate([
            'name' => 'required|min:5|string',
            'nisn' => 'required|min:8|integer',
            'tempat-lahir' => 'required|min:5|string',
            'alamat' => 'required',
            'umur' => 'required|integer',
            'password' => 'required'
        ]);

        dd($validasi);
        return 'data berhasil';
        // return view('');
    }
}
