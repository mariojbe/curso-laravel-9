@extends('layouts.app')

@section('title', "Novo Comentário para o Usuário {$user->name}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="horizontal-center">
                <center>
                    <h1>Novo Comentário para o Usuário {{ $user->name }}</h1>
                </center>

                @include('includes.validantions-form')

                <form class="row g-3" action="{{ route('comments.store', $user->id) }}" method="post">
                    @csrf
                    @include('users.comments._partials.form')
                </form>
            </div>
        </div>
    </div>
@endsection
