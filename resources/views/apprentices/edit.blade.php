@extends('layouts.app')
@section('content')
    <h1>Editar Aprendiz</h1>
    <form action="{{ route('apprentices.update', $apprentice) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $apprentice->name }}" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ $apprentice->email }}" required>
        <label for="cell_number">Celular:</label>
        <input type="text" name="cell_number" id="cell_number" value="{{ $apprentice->cell_number }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
