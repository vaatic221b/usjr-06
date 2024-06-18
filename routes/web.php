<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniversityController;


Route::get('/show/students/all', [UniversityController::class, 'showAllStudents'])->name('students.all');


Route::get('/show/student/{id}', [UniversityController::class, 'showStudent'])->name('student.show');


Route::get('/show/colleges', [UniversityController::class, 'showColleges'])->name('colleges.all');


Route::get('/show/college/{id}', [UniversityController::class, 'showCollege'])->name('college.show');


Route::get('/show/departments', [UniversityController::class, 'showDepartments'])->name('departments.all');


Route::get('/', function () {
    return view('welcome');
});
