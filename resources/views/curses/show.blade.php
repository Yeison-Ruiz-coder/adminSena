@extends('layouts.app')
@section('content')
    <h1>Detalle del Curso</h1>
    <p>ID: {{ $curse->id }}</p>
    <p>Número de curso: {{ $curse->curse_number }}</p>
    <p>Día: {{ $curse->day }}</p>
    <a href="{{ route('curses.index') }}">Volver</a>
@endsection
