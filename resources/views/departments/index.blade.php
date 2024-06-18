<!-- resources/views/departments/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Departments</h1>
        <ul>
            @foreach ($departments as $department)
                <li>{{ $department->deptfullname }}</li>
                <p>College: {{ $department->college->collfullname }}</p>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
