@extends('layouts.app')

@section('content')
    <h1>Course Teacher List</h1>
    <a href="{{ route('course_teacher.create') }}">Create New</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Curse ID</th>
                <th>Teacher ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courseTeachers as $courseTeacher)
                <tr>
                    <td>{{ $courseTeacher->id }}</td>
                    <td>{{ $courseTeacher->curse_id }}</td>
                    <td>{{ $courseTeacher->teacher_id }}</td>
                    <td>
                        <a href="{{ route('course_teacher.show', $courseTeacher) }}">View</a>
                        <a href="{{ route('course_teacher.edit', $courseTeacher) }}">Edit</a>
                        <form action="{{ route('course_teacher.destroy', $courseTeacher) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
