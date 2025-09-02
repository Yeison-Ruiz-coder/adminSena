@extends('layouts.app')
@section('content')
    <h1>Centros de Formación</h1>
    <a href="{{ route('training_centers.create') }}">Crear nuevo centro</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($trainingCenters as $center)
            <li>
                {{ $center->name }} - {{ $center->location }}
                <a href="{{ route('training_centers.show', $center) }}">Ver</a>
                <a href="{{ route('training_centers.edit', $center) }}">Editar</a>
                <form action="{{ route('training_centers.destroy', $center) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
