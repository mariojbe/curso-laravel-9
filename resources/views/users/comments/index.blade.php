@extends('layouts.app')

@section('title', "Comantários do Usuário {$user->name}")

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">
        Comantários do Usuário {{ $user->name }}
        (<a href="{{ route('users.create') }}">+</a>)
    </h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="search" name="search" id="search" placeholder="Pesquisar...">
        <button class="btn btn-primary">Pesquisar</button>
    </form>

    <ul>
        @foreach ($comments as $comment)
            <li>
                {{ $comment->body }} -
                {{ $comment->visible }}
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
        @endforeach
    </ul>
@endsection
