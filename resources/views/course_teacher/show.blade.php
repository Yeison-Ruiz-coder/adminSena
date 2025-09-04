@extends('layouts.app')

@section('content')
    <h1>Course Teacher Details</h1>
    <p>ID: {{ $courseTeacher->id }}</p>
    <p>Curse ID: {{ $courseTeacher->curse_id }}</p>
    <p>Teacher ID: {{ $courseTeacher->teacher_id }}</p>
    <a href="{{ route('course_teacher.edit', $courseTeacher) }}">Edit</a>
    <a href="{{ route('course_teacher.index') }}">Back to List</a>
@endsection
