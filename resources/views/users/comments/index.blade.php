@extends('layouts.app')

@section('title', "Comantários do Usuário {$user->name}")

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">
        Comantários do Usuário {{ $user->name }}
        (<a href="{{ route('comments.create', $user->id) }}">+</a>)
    </h1>

    <form action="{{ route('comments.index', $user->id) }}" method="get">
        <input type="search" name="search" id="search" placeholder="Pesquisar...">
        <button class="btn btn-primary">Pesquisar</button>
    </form>

    <ul>
        @foreach ($comments as $comment)
            <li>
                {{ $comment->body }} -
                {{ $comment->visible ? 'SIM' : 'NÃO' }}
                | <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection
