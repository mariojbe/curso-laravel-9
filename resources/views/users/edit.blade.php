@extends('layouts.app')

@section('title', "Editar o Usuário {$user->name}")

@section('content')
    <div class="container">
        <div class="row">
            <div class="horizontal-center">
                <center>
                    <h1>Editar o Usuário {{ $user->name }}</h1>
                </center>

                @include('includes.validantions-form')

                <form class="row g-3" action="{{ route('users.update', $user->id) }}" method="post">
                    @method('put')
                    @include('users._partials.form')
                </form>
            </div>
        </div>
    </div>
@endsection
