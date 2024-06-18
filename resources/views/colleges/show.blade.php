@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">{{ $college->collfullname }}</h1>
            </div>
            <div class="card-body">
                <h2 class="card-subtitle mb-2 text-muted">Programs and Departments:</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Program</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($college->departments as $department)
                            @foreach($department->programs as $program)
                                <tr>
                                    <td>{{ $program->progfullname }}</td>
                                    <td>{{ $department->deptfullname }}</td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
                <a href="{{ route('colleges.all') }}" class="btn btn-primary mt-3">Back to All Colleges</a>
            </div>
        </div>
    </div>
@endsection
