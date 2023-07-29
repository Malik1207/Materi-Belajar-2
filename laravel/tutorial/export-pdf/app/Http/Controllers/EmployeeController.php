<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Barryvdh\DomPDF\Facade\Pdf;

class EmployeeController extends Controller
{
    public function showEmployees(){
        $employee = Employee::all();
        return view('index', compact('employee'));
      }

      public function createPDF() {
        // retreive all records from db
        $data = Employee::all();
        // share data to view
        // view()->share('employee', $data);
        $pdf = Pdf::loadView('pdf_view', ['data' => $data]);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
}
