@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Departments</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Department ID</th>
                    <th>Department Full Name</th>
                    <th>Department Short Name</th>
                    <th>College</th>
                </tr>
            </thead>
            <tbody>
                @foreach($departments as $department)
                    <tr>
                        <td>{{ $department->deptid }}</td>
                        <td>{{ $department->deptfullname }}</td>
                        <td>{{ $department->deptshortname ?? '-' }}</td>
                        <td>{{ $department->college->collfullname }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
