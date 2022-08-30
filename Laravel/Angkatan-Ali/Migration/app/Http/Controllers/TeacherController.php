<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index() {
        $teacher = Teacher::get();

        return view('/teacher', compact('teacher'));
    }

    public function insert() {
        $guru = new Teacher;
        $guru->name = 'Agus';
        $guru->alamat = 'Jl. Mawar';
        $guru->tanggal_lahir = '1978-05-21';
        $guru->email = 'aguswidodo@gmail.com';
        $guru->phone = 2559312;
        $guru->mata_pelajaran = 'Fiqih';
        $guru->save();

        dump($guru);
    }

    public function update() {
        $guru = new Teacher;
        $guru->alamat = 'Jakarta, monas';
        $guru->mata_pelajaran = 'Sejarah';
        $guru->phone = 2550399;
        $guru->save();

        return "Data Telah di Ubah";
    }

    public function massUpdate() {
        Teacher::find(2)->update([
            'alamat' => 'Yogyakarta',
            'phone' => 2255951
        ]);

        return "berhasil diubah";
    }

    public function destroy() {
        Teacher::destroy(5);

        return "Data Telah di Hapus";
    }

    public function massDestroy() {
        $data = Teacher::find(6);
        $data->delete();

        return "Data Telah di Hapus";
    }


}
