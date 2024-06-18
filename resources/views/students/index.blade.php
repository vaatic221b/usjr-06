<!-- resources/views/students/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Students</h1>
        <ul>
            @foreach ($students as $student)
                <li>{{ $student->studfirstname }} {{ $student->studlastname }}</li>
                <a href="{{ route('student.show', ['id' => $student->id]) }}">Show Details</a>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
