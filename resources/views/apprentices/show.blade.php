@extends('layouts.app')
@section('content')
    <h1>Detalle del Aprendiz</h1>
    <p>ID: {{ $apprentice->id }}</p>
    <p>Nombre: {{ $apprentice->name }}</p>
    <p>Email: {{ $apprentice->email }}</p>
    <p>Celular: {{ $apprentice->cell_number }}</p>
    <a href="{{ route('apprentices.index') }}">Volver</a>
@endsection
