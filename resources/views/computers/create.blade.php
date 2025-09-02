@extends('layouts.app')
@section('content')
    <h1>Crear Computadora</h1>
    <form action="{{ route('computers.store') }}" method="POST">
        @csrf
        <label for="number">Número:</label>
        <input type="text" name="number" id="number" required>
        <label for="brand">Marca:</label>
        <input type="text" name="brand" id="brand" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
