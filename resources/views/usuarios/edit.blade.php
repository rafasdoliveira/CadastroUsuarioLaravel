@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('/css/global.css')}}">
<link rel="stylesheet" href="{{ asset('/css/createUser.css')}}">
@endsection
@section('title', 'Editando:' . $usuario->primeiroNome)

@section('content')
<main>
  <div class="learn-code">
      <h2 class="learn__h2">
        Editando: {{ $usuario->primeiroNome }}
      </h2>
      <p class="learn__p">
      Atualize os dados!
      </p>
    </div>
    <div class="form-container">
      <div class="cta__container">
        Preencha os dados com cuidado!
      </div>

      {{-- Use a helper route para referenciar os actions e hrefs do seu projeto --}}
      <form action="/usuarios/update/{{ $usuario->id }}" method="POST" class="form" enctype="multipart/form-data">
      {{-- <form action="/usuarios" method="POST" class="form"> --}}
      @csrf
      @method('PUT')
      <div class="input__container">
        <input class="input-text" type="text" name="primeiroNome" id="primeiroNome" placeholder="Nome" value="{{ $usuario -> primeiroNome}}">
        <input class="input-text" type="text" name="ultimoNome" id="ultimoNome" placeholder="Sobrenome" value="{{ $usuario -> ultimoNome}}">
        <input type="file" name="image" id="image">
        <img src="image/usuarioPerfil/{{ $usuario->image }}" alt="" class="img-preview">
        <input class="input-text" type="email" name="email" id="email" placeholder="E-mail" value="{{ $usuario -> email}}">
        <input class="input-text" type="password" name="senha" id="senha" placeholder="Senha" value="{{ $usuario -> senha}}">
        <input class="input-button" type="submit" value="Editar usuário">
      </div>
    </form>
  </div>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // Este trecho de código envolve o código jQuery para garantir que ele só seja executado quando o DOM (Document Object Model) estiver completamente carregado.
    $(document).ready(function() {
        // Esta é uma diretiva condicional do Blade, o mecanismo de template do Laravel. Ela verifica se há erros de validação disponíveis na variável
        // Se houver erros de validação, exibir um alerta
        @if ($errors->any())
            var errorMessage = '';
            @foreach ($errors->all() as $error)
                errorMessage += '{{ $error }}\n';
            @endforeach
            alert(errorMessage);
        @endif
    });
</script>
@endsection

