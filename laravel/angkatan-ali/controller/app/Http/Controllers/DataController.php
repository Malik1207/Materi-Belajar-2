<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function pekerja() {
        $arrayPekerja = ['Rhoma', 'Agus', 'Hasan', 'Raib'];

        return view('views.guru', ['pekerja' => $arrayPekerja]);
    }

    public function murid() {
        $arrayMurid = ['Tahu', 'Tempe', 'Es Krim', 'Nasi'];

        return view('views.siswa', ['murid' => $arrayMurid]);
    }
}
