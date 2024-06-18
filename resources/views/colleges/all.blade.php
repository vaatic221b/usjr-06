@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>All Colleges and Programs</h2>

        {{-- Debugging --}}
        {{-- {{ dd($colleges) }} --}}

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>College</th>
                    <th>Programs</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($colleges as $college)
                    <tr>
                        <td>{{ $college->collfullname }}</td>
                        <td>
                            <ul>
                                @foreach($college->programs as $program)
                                    <li>{{ $program->progfullname }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td><a href="{{ url('/show/college', $college->collid) }}">Show Departments</a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No colleges found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
