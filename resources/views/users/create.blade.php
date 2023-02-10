@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <div class="container">
        <div class="row">
            <div class="horizontal-center">
                <center>
                    <h1>Novo Usuário</h1>
                </center>

                {{-- MENSAGEM DE ERRO DE VALIDAÇÃO --}}
                @if ($errors->any())
                    <ul class="errors">
                        @foreach ($errors->all() as $error)
                            <li class="error">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <form class="row g-3" action="{{ route('users.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Nome" required
                            autofocus value="{{ old('name') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="E-mail"
                            required value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Senha"
                            required value="{{ old('password') }}">
                    </div>
                    <div class="form-group mb-3">
                        <input type="reset" class="btn btn-danger btn-sm" value="Limpar">
                    </div>
                    <div class="d-grid gap-2">
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
