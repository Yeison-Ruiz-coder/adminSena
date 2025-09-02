@extends('layouts.app')
@section('content')
    <h1>Editar Computadora</h1>
    <form action="{{ route('computers.update', $computer) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="number">Número:</label>
        <input type="text" name="number" id="number" value="{{ $computer->number }}" required>
        <label for="brand">Marca:</label>
        <input type="text" name="brand" id="brand" value="{{ $computer->brand }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
