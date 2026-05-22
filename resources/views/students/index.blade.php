<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        @if(session('flash_message'))
            <div style="color: green;">{{ session('flash_message') \}}</div>
        @endif

    <a href="{{ url('student/create') }}">Add</a>
    <table class="table-responsive">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date of Birth</th>
                <th>Phone Number</th>
                <th>Skills</th>
                <th>Gender</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->password }}</td>
                <td>{{ $student->date_of_birth }}</td>
                <td>{{ $student->phone_number }}</td>
                <td>{{ implode(',', $student->skills) }} </td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->department }}</td>
                <td>
                    <a href="{{ url('/student/' . $student->id ) }}">Show</a>
                    <a href="{{ url('/student/' . $student->id . '/edit') }}">Edit</a>
                    <form action="{{ url('student' .'/'.  $student->id) }}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                    <button type="submit" onclick="return confirm(&quot; Confirm Delete &quot; )">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>