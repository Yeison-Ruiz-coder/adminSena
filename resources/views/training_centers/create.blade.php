@extends('layouts.app')
@section('content')
    <h1>Crear Centro de Formación</h1>
    <form action="{{ route('training_centers.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <label for="location">Ubicación:</label>
        <input type="text" name="location" id="location" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
