@extends('layouts.app')
@section('content')
    <h1>Editar Centro de Formación</h1>
    <form action="{{ route('training_centers.update', $trainingCenter) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ $trainingCenter->name }}" required>
        <label for="location">Ubicación:</label>
        <input type="text" name="location" id="location" value="{{ $trainingCenter->location }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
