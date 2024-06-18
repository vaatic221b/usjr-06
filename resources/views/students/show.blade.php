@extends('layouts.app')  {{-- Assuming you have a layout file to extend --}}

@section('content')
    <div class="container">
        <h2>Student Details</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Student ID: {{ $student->studid }}</h5>
                <p class="card-text"><strong>Name:</strong> {{ $student->studfirstname }} {{ $student->studmidname ?? '' }} {{ $student->studlastname }}</p>
                <p class="card-text"><strong>Program:</strong> {{ $student->program->progfullname }}</p>
                <p class="card-text"><strong>College:</strong> {{ $student->college->collfullname }}</p>
                <p class="card-text"><strong>Year:</strong> {{ $student->studyear }}</p>
                <a href="{{ route('students.all') }}" class="btn btn-primary">Back to All Students</a>
            </div>
        </div>
    </div>
@endsection
