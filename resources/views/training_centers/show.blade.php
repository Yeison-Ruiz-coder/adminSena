@extends('layouts.app')
@section('content')
    <h1>Detalle del Centro de Formación</h1>
    <p>ID: {{ $trainingCenter->id }}</p>
    <p>Nombre: {{ $trainingCenter->name }}</p>
    <p>Ubicación: {{ $trainingCenter->location }}</p>
    <a href="{{ route('training_centers.index') }}">Volver</a>
@endsection
