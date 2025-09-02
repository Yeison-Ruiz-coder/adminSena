@extends('layouts.app')
@section('content')
    <h1>Detalle de la Computadora</h1>
    <p>ID: {{ $computer->id }}</p>
    <p>Número: {{ $computer->number }}</p>
    <p>Marca: {{ $computer->brand }}</p>
    <a href="{{ route('computers.index') }}">Volver</a>
@endsection
