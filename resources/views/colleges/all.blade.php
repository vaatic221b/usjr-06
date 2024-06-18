@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Colleges and Programs</h2>
        @foreach($colleges as $college)
            <div class="card mb-3">
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
                </div>
            </div>
        @endforeach
    </div>
@endsection
