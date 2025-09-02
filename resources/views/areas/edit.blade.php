@extends('layouts.app')
@section('content')
    <h1>Editar Área</h1>
    <form action="{{ route('areas.update', $area) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $area->nombre }}" required>
        <button type="submit">Actualizar</button>
    </form>
@endsection
