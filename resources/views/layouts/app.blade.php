<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Portal</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('students.all') }}">All Students</a></li>
            <li><a href="{{ route('colleges.all') }}">All Colleges</a></li>
            <li><a href="{{ route('departments.all') }}">All Departments</a></li>
        </ul>
    </nav>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
