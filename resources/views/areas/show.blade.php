@extends('layouts.app')
@section('content')
    <h1>Detalle del Área</h1>
    <p>ID: {{ $area->id }}</p>
    <p>Nombre: {{ $area->nombre }}</p>
    <a href="{{ route('areas.index') }}">Volver</a>
@endsection
