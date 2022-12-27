<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function welcome() {
        return view('pages.welcome');
    }

    public function siswa() {
        $arrsiswa = ['Mail', 'Yasir', 'Malik', 'Ali', 'Abdu'];

        return view('pages.siswa', compact('arrsiswa'));
        // return view('pages.siswa')->with('siswa', 'arrsiswa');
    }

}
