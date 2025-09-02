@extends('layouts.app')
@section('content')
    <h1>Aprendices</h1>
    <a href="{{ route('apprentices.create') }}">Crear nuevo aprendiz</a>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <ul>
        @foreach($apprentices as $apprentice)
            <li>
                {{ $apprentice->name }} - {{ $apprentice->email }} - {{ $apprentice->cell_number }}
                <a href="{{ route('apprentices.show', $apprentice) }}">Ver</a>
                <a href="{{ route('apprentices.edit', $apprentice) }}">Editar</a>
                <form action="{{ route('apprentices.destroy', $apprentice) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
