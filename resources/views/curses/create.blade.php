@extends('layouts.app')
@section('content')
    <h1>Crear Curso</h1>
    <form action="{{ route('curses.store') }}" method="POST">
        @csrf
        <label for="curse_number">Número de curso:</label>
        <input type="text" name="curse_number" id="curse_number" required>
        <label for="day">Día:</label>
        <input type="text" name="day" id="day" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
