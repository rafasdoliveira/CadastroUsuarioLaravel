@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('/css/global.css')}}">
<link rel="stylesheet" href="{{ asset('/css/cadastrados.css')}}">
@endsection
@section('title', 'Cadastrados')

@section('content')
<div class="usuarios_cadastrados">
    <div class="usuarios__title">
      <h2>Usuários Cadastrados</h2>
    </div>
    <div class="dadosCadastrados">
        <div class="nome">
            <div class="label">
                <label for="" class="label">Nome</label>
            </div>
            <div class="nomes">
                @foreach($usuarios as $usuario)
                <span>{{ $usuario -> primeiroNome}}</span>
                @endforeach
            </div>
        </div>
        <div class="sobrenome">
            <div class="label">
                <label for="" class="label">Sobrenome</label>
            </div>
            <div class="nomes">
                @foreach($usuarios as $usuario)
                <span>{{ $usuario -> ultimoNome}}</span>
                @endforeach
            </div>
        </div>
        <div class="sobrenome">
            <div class="label">
                <label for="" class="label">E-mail</label>
            </div>
            <div class="nomes">
                @foreach($usuarios as $usuario)
                <span>{{ $usuario -> email}}</span>
                @endforeach
            </div>
        </div>
        <div class="sobrenome">
            <div class="label">
                <label for="" class="label">Senha</label>
            </div>
            <div class="nomes">
                @foreach($usuarios as $usuario)
                <span>{{ $usuario -> senha  }}</span>
                @endforeach
            </div>
        </div>
        <div class="botoes">
            @foreach ($usuarios as $usuario)

                <a href="{{ route("usuario.edit",["id"=>$usuario->id]) }}">Editar</a>

                {{-- Usar a Helper route, conforme acima --}}
                <form action="{{ route("usuario.delete", ["id"=>$usuario->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Excluir</button>
                </form>
            @endforeach
        </div>
      </div>
  </div>
</div>
@endsection

