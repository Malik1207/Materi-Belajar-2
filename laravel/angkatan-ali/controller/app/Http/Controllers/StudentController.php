<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function cekObjek() {
        $mahasiswa = new student;

        var_dump($mahasiswa);
    }
}
