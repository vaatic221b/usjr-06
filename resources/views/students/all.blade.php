@extends('layouts.app')  {{-- Assuming you have a layout file to extend --}}

@section('content')
    <div class="container">
        <h2>All Students</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Program</th>
                    <th>College</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->studid }}</td>
                        <td>{{ $student->studfirstname }}</td>
                        <td>{{ $student->studlastname }}</td>
                        <td>{{ $student->program->progfullname }}</td>
                        <td>{{ $student->college->collfullname }}</td>
                        <td><a href="{{ route('student.show', ['id' => $student->studid]) }}" class="btn btn-primary">Show Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
