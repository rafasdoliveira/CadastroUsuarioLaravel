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
                        <button class="button" type="submit">Pesquisar</button>
                    </div>
                </div>
            </div>
        </form>


        <div class="profile">
            <div class="profile__img">
                @if (isset($usuario))
                    {{ $usuario->imagem }}
                @endif
            </div>
            <div class="profile__dados">
                <div class="header">
                    <div class="usuarios">
                        @if (isset($usuario))
                            {{ $usuario->primeiroNome }}
                        @endif
                        @if (isset($usuario))
                            {{ $usuario->ultimoNome }}
                        @endif
                        <div class="usuario">
                            @if (isset($usuario))
                            {{ $usuario->usuario }}
                            @endif
                        </div>
                    </div>
                    <div class="created">
                        @if (isset($usuario))
                            {{ $usuario->created_at }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
