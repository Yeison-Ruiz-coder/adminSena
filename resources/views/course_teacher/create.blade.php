@extends('layouts.app')

@section('content')
    <h1>Create Course Teacher</h1>
    <form action="{{ route('course_teacher.store') }}" method="POST">
        @csrf
        <label for="curse_id">Curse ID:</label>
        <input type="number" name="curse_id" id="curse_id" required>
        <label for="teacher_id">Teacher ID:</label>
        <input type="number" name="teacher_id" id="teacher_id" required>
        <button type="submit">Create</button>
    </form>
@endsection
