@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
    <div class="container">
        <div class="row">
            <div class="horizontal-center">
                <center>
                    <h1>Novo Usuário</h1>
                </center>

                @include('includes.validantions-form')

                <form class="row g-3" action="{{ route('users.store') }}" method="post">
                    @csrf
                    @include('users._partials.form')
                </form>
            </div>
        </div>
    </div>
@endsection
