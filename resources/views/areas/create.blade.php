@extends('layouts.app')
@section('content')
    <h1>Crear Área</h1>
    <form action="{{ route('areas.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
