@extends('layouts.app')
@section('content')
    <h1>Editar Docente</h1>
    <form action="{{ route('teachers.update', $teacher) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $teacher->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $teacher->email }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
