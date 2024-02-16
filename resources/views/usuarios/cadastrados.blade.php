@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="{{ asset('/css/cadastrados.css')}}">
@endsection

@section('title', 'Cadastrados')
@section('content')
    <div class="container">
        <form action="{{ route('usuario.buscar') }}" method="GET">
            <div class="search">
                <div class="search__input-text">
                    <span></span>
                    <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Digite o nome do usuário">
                    <div class="search__input-button">
                        <span></span>
                        <button type="submit">Pesquisar</button>
                    </div>
                </div>
            </div>
        </form>
        @if (isset($usuario))
            <div class="profile">
                <p>{{ $usuario->usuario }}</p>
            </div>
        @endif
    </div>
@endsection
