<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required'
        ]);

        // dd($request->all());

        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->telephone = $request->telephone;
        $student->save();

        return response()->json([
            'message' => 'Data Student berhasil ditambahkan',
            'data_student' => $student
        ], 200);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return response()->json([
            'message' => 'Success',
            'data_student' => $student
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'telephone' => 'required'
        ]);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone
        ]);

        return response()->json([
            'message' => 'success',
            'data_student' => $student
        ], 200);
    }

    public function delete($id)
    {
        $student = Student::find($id)->delete();

        return response()->json([
            'message' => 'Data student berhasil dihapus'
        ], 200);
    }
}
