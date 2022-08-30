<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index() {
        echo '<0l>';
        echo '<li> <a href=/buat-session >Buat Session</a></li>';
        echo '<li> <a href=/akses-session >Akses Session</a></li>';
        echo '<li> <a href=/hapus-session >Hapus Session</a></li>';
        echo '<li> <a href=/flash-session >Flash Session</a></li>';
        echo '</0l>';
    }

    public function buatSession(Request $request) {

        // Function Helper
        // session(['hakAkses' => 'Admin', 'nama' => 'Markon']);
        // return 'Session sudah dibuat';

        // Method Request Object
        // $request->session()->put(['hakAkses' => 'User', 'nama' => 'John Cenna']);
        // return 'Session sudah dibuat';

        // Method Session
        Session::put(['hakAkses' => 'Staff', 'nama' => 'Pak Joni' ]);
        return 'Session sudah dibuat';
    }

    public function aksesSession(Request $request) {

        // Function Helper
        // echo session('hakAkses');
        // echo '&nbsp';
        // echo session('nama');

        // Method Request Object
        // echo $request->session()->get('hakAkses');
        // echo '&nbsp';
        // echo $request->session()->get('nama');

        // echo "<hr>";

        // $isiSession = $request->session()->get('Kota','Yogyakarta');
        // echo "Isi Session adalah $isiSession";

        // echo "<hr>";

        // if(session()->has('hakAkses')) {
        //     echo "Session 'Hak Akses' terdeteksi: ". session('hakAkses');
        // }

        // echo '<hr>';

        // if(session()->has('hakAkses')) {
        //     echo "Session 'Nama' terdeteksi: ". session('nama');
        // }

        // Method Session
        echo Session::get('hakAkses');
        echo '&nbsp';
        echo Session::get('nama');

    }

    public function hapusSession(Request $request) {

        // Function Helper
        // // session()->forget('hakAkses');
        // // session()->forget('nama');

        // session()->forget(['hakAkses','nama']);
        // return 'Session berhasil dihapus';

        // Method Request Object
        // $request->session()->forget(['hakAkses','nama']);
        // $request->session()->flush();
        // return 'Session berhasil dihapus';

        // Method Session

        Session()->forget(['hakAkses','nama']);
        return 'Session berhasil dihapus';
    }

    public function flashSession(Request $request) {

        // Function Helper
        // session()->flash('hakAkses','Admin');
        // session()->flash('nama','Markon');

        // echo 'Flash Session suddah dibuat';

        // Method Request Object
        // $request->session()->flash('hakAkses','User');
        // $request->session()->flash('nama','John Cenna');

        // echo 'Flash Session suddah dibuat';

        // Method Session
        Session::flash('hakAkses','Staff');
        Session::flash('nama','Pak Joni');

        echo 'Flash Session suddah dibuat';

    }

}
