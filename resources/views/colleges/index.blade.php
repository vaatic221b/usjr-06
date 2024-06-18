<!-- resources/views/colleges/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>All Colleges</h1>
        <ul>
            @foreach ($colleges as $college)
                <li>{{ $college->collfullname }}</li>
                <ul>
                    @foreach ($college->departments as $department)
                        <li>{{ $department->deptfullname }}</li>
                    @endforeach
                </ul>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
