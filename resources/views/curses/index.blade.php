@extends('layouts.app')
@section('content')
    <h1>Cursos</h1>
    <a href="{{ route('curses.create') }}">Crear nuevo curso</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($curses as $curse)
            <li>
                {{ $curse->curse_number }} - {{ $curse->day }}
                <a href="{{ route('curses.show', $curse) }}">Ver</a>
                <a href="{{ route('curses.edit', $curse) }}">Editar</a>
                <form action="{{ route('curses.destroy', $curse) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
