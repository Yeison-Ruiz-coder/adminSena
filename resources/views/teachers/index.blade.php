@extends('layouts.app')
@section('content')
    <h1>Docentes</h1>
    <a href="{{ route('teachers.create') }}">Crear nuevo docente</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($teachers as $teacher)
            <li>
                {{ $teacher->name }} - {{ $teacher->email }}
                <a href="{{ route('teachers.show', $teacher) }}">Ver</a>
                <a href="{{ route('teachers.edit', $teacher) }}">Editar</a>
                <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
