<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function guru() {
        $arrayGuru = ['Ihsan', 'Abdu', 'Ujeb', 'Ram'];

        return view('views.guru', ['guru' => $arrayGuru]);
    }

    public function siswa() {
        $arraySiswa = ['Ihsan', 'Mail', 'Malik', 'Hisyam'];

        return view('views.siswa', ['siswa' => $arraySiswa]);
    }
}
