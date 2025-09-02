@extends('layouts.app')
@section('content')
    <h1>Áreas</h1>
    <a href="{{ route('areas.create') }}">Crear nueva área</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($areas as $area)
            <li>
                {{ $area->nombre }}
                <a href="{{ route('areas.show', $area) }}">Ver</a>
                <a href="{{ route('areas.edit', $area) }}">Editar</a>
                <form action="{{ route('areas.destroy', $area) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
