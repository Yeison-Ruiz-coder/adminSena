@extends('layouts.app')

@section('content')
    <h1>Edit Course Teacher</h1>
    <form action="{{ route('course_teacher.update', $courseTeacher) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="curse_id">Curse ID:</label>
        <input type="number" name="curse_id" id="curse_id" value="{{ $courseTeacher->curse_id }}" required>
        <label for="teacher_id">Teacher ID:</label>
        <input type="number" name="teacher_id" id="teacher_id" value="{{ $courseTeacher->teacher_id }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
