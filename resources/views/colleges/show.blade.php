@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $college->collfullname }}</h5>
            </div>
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">Departments:</h6>
                <ul class="list-group">
                    @foreach($college->departments as $department)
                        <li class="list-group-item">{{ $department->deptfullname }}</li>
                    @endforeach
                </ul>
                <h6 class="card-subtitle mt-3 mb-2 text-muted">Programs:</h6>
                <ul class="list-group">
                    @foreach($college->programs as $program)
                        <li class="list-group-item">{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
                <a href="{{ route('colleges.all') }}" class="btn btn-primary mt-3">Back to All Colleges</a>
            </div>
        </div>
    </div>
@endsection
