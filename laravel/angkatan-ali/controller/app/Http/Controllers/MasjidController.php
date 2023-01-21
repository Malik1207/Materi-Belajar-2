<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasjidController extends Controller
{
    public function kotakAmal() {
        $pemasukan = 4000000;
        $pengeluaran = 30000;

        $jumlah = $pemasukan - $pengeluaran;
    }
}
