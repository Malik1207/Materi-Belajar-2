<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function create(Request $request)
    {
        // dd($request->all());
        $student = new Student;
        $student->name = $request->name;
        $student->address = $request->address;
        $student->telephone = $request->telephone;
        $student->save();

        foreach ($request->list_subject as $key => $value) {
            $score = array(
                'student_id' => $student->id,
                'subject' => $value['subject'],
                'score' => $value['score']
            );
            $score = Score::create($score);
        }

        return response()->json([
            'message' => 'success'
        ], 200);
    }

    public function show($id)
    {
        $student = Student::with('score')->where('id', $id)->first();
        return response()->json([
            'message' => 'success',
            'data_student' => $student
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        // dd($student);
        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'telephone' => $request->telephone,
        ]);

        Score::where('student_id', $id)->delete();

        foreach ($request->list_subject as $key => $value) {
            $score = array(
                'student_id' => $id,
                'subject' => $value['subject'],
                'score' => $value['score']
            );
            $score = Score::create($score);
        }

        return response()->json([
            'message' => 'success'
        ], 200);
    }
}
