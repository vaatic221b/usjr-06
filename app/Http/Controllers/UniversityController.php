<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\College;
use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function showAllStudents()
    {
        $students = Student::with('college')->get();
        return view('students.index', compact('students'));
    }

    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function showColleges()
    {
        $colleges = College::with('departments')->get();
        return view('colleges.index', compact('colleges'));
    }

    public function showCollege($id)
    {
        $college = College::with('departments.programs')->findOrFail($id);
        return view('colleges.show', compact('college'));
    }

    public function showDepartments()
    {
        $departments = Department::with('college')->get();
        return view('departments.index', compact('departments'));
    }
}
