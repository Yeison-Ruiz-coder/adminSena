@extends('layouts.app')
@section('content')
    <h1>Computadoras</h1>
    <a href="{{ route('computers.create') }}">Crear nueva computadora</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($computers as $computer)
            <li>
                {{ $computer->number }} - {{ $computer->brand }}
                <a href="{{ route('computers.show', $computer) }}">Ver</a>
                <a href="{{ route('computers.edit', $computer) }}">Editar</a>
                <form action="{{ route('computers.destroy', $computer) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
