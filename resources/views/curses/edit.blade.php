@extends('layouts.app')
@section('content')
    <h1>Editar Curso</h1>
    <form action="{{ route('curses.update', $curse) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="curse_number">Número de curso:</label>
        <input type="text" name="curse_number" id="curse_number" value="{{ $curse->curse_number }}" required>
        <label for="day">Día:</label>
        <input type="text" name="day" id="day" value="{{ $curse->day }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
