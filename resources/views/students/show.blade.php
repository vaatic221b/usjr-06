<!-- resources/views/students/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Student Details</h1>
        <p>Name: {{ $student->studfirstname }} {{ $student->studlastname }}</p>
        <p>Program: {{ $student->program }}</p>
        <p>College: {{ $student->college->collfullname }}</p>
        <!-- Add more details as needed -->
    </div>
@endsection
