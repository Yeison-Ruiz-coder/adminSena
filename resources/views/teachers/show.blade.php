@extends('layouts.app')
@section('content')
    <h1>Detalle del Docente</h1>
    <p>ID: {{ $teacher->id }}</p>
    <p>Nombre: {{ $teacher->name }}</p>
    <p>Email: {{ $teacher->email }}</p>
    <a href="{{ route('teachers.index') }}">Volver</a>
@endsection
