<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
            // menampilkan data yang berada direcicle bin 'misal'
        // $students = Student::withTrashed()->get();

            // menampilakn seluruh data dengan filter name dan jurusan
        $students = Student::all('name', 'jurusan');

            // mengambil 1 data pertama jadi tidak perlu memakai foreach
        // $students = Student::where('alamat' , '=' , 'Bekasi')->get();
        // $students = Student::where('jurusan' , '!=' , 'Jakarta')
        //             ->orderBy('id', 'desc') // asc && desc
        //             ->get();

            // $students = Student::where('jurusan' , '!=' , 'Jakarta')
        //             ->orderBy('id', 'desc') // asc && desc
        //             ->first();       // mengambil 1 data dari yang dipilih

            // mengambil data berdasarkan id
        // $students = Student::find(3);

            // mengurutkan
        // $students = Student::where('jurusan' , '!=' , 'Jakarta')
        //             ->latest()
        //             ->get();

            // membatasi limit data yang ingin ditampilkan
        // $students = Student::where('jurusan' , '!=' , 'Jakarta')
        //             ->limit(2)
        //             ->latest()
        //             ->get();

            // melompati data ke-n
        // $students = Student::where('jurusan' , '!=' , 'Jakarta')
        //             ->skip(1)
        //             ->take(2)
        //             ->get();


        return view('student', compact('students'));
    }

    public function restore() {
        Student::withTrashed()->where('alamat', 'Bandung')->restore();

        return "Berhasil mengembalikan data";
    }

    // untuk menghapus data yang sudah di softdelete
    public function forceDelete() {
        Student::find(1)->forceDelete();

        return "Data yang disampah sudah dihapus";
    }

    public function insert() {
        $mahasiswa = new Student;
        $mahasiswa->name = 'Extreeme33';
        $mahasiswa->jurusan = 'Anatomi Tubuh';
        $mahasiswa->tanggal_lahir = '2001-04-02';
        $mahasiswa->alamat = 'Bandung';
        $mahasiswa->nilai = 3.99;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function update() {
        $mahasiswa = Student::where('name', 'budi');
        $mahasiswa->alamat = 'Jakarta';
        $mahasiswa->nilai = 3.0;
        $mahasiswa->save();

        dump($mahasiswa);
    }

    public function massUpdate() {
        Student::find(3)->update([
            'alamat' => 'Palembang',
            'jurusan' => 'Seni',
            'nilai' => 4.0
        ]);

        return "berhasil";
    }

    public function destroy() {
        Student::destroy(5);

        return 'Data Telah dihapus';
    }

    public function massDestroy() {
        $data = Student::find(6);
        $data->delete();

        return "data telah dihapus";
    }
}
