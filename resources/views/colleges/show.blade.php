<!-- resources/views/colleges/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>College Details</h1>
        <h2>{{ $college->collfullname }}</h2>
        <p>Departments:</p>
        <ul>
            @foreach ($college->departments as $department)
                <li>{{ $department->deptfullname }}</li>
                <ul>
                    @foreach ($department->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
            @endforeach
        </ul>
    </div>
@endsection
