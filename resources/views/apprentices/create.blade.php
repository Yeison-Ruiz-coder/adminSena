@extends('layouts.app')
@section('content')
    <h1>Crear Aprendiz</h1>
    <form action="{{ route('apprentices.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="cell_number">Celular:</label>
        <input type="text" name="cell_number" id="cell_number" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
