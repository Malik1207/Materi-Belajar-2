<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function __construct()
    {
        // $this->middleware('mhs')->except('createMahasiswa');
        // $this->middleware('mhs')->only('createMahasiswa');
        $this->middleware('mhs');
    }

    public function formMahasiswa()
    {
        return 'Ini Form Mahasiswa';
    }

    public function createMahasiswa()
    {
        return 'Ini Create Mahasiswa';
    }
}
