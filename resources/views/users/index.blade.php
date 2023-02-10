@extends('layouts.app')

@section('title', 'Listagem dos Usuários')

@section('content')
    <h1>
        Lista de Usuários
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="search" name="search" id="search" placeholder="Pesquisar...">
        <button class="btn btn-primary">Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
        @endforeach
    </ul>
@endsection