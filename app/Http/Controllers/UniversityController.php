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
        $students = Student::all();
        return view('students.all', compact('students'));
    }
    
    public function showStudent($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }
    
    public function showColleges()
    {
        try {
            $colleges = College::with('departments.programs')->get();
            return view('colleges.all', compact('colleges'));
        } catch (\Exception $e) {
            // Log the error
            \Log::error('Error fetching colleges: ' . $e->getMessage());
            // Return an error view or redirect with a message
            return back()->withError('Error fetching colleges. Please try again later.');
        }
    }
    
    
    public function showCollege($id)
    {
        $college = College::with('departments.programs')->findOrFail($id);
        return view('colleges.show', compact('college'));
    }
    
    public function showDepartments()
    {
        $departments = Department::with('college')->get();
        return view('departments.all', compact('departments'));
    }
}
