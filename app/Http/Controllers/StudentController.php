<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->get();
        return view('student', ['studentList' => $student]);
    }
}
