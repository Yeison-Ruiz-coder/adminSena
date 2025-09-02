@extends('layouts.app')
@section('content')
    <h1>Crear Docente</h1>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
