<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function teman() {
        $arrayTeman = ['Abdu', 'Mail', 'Yasir', 'Malik'];
        $arrayHome = ['home', 'rumah', 'sekolah', 'Baitun'];

        return view('halaman.teman',
        ['teman' => $arrayTeman,
        'home' => $arrayHome
        ]);
    }

    public function home() {
        return view('halaman.home');
    }

    public function profile() {
        return view('halaman.profile');
    }
}
