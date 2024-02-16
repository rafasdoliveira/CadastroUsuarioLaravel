@extends('layouts.main')
@section('style')
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
      <form action="{{ route('usuario.store'), ['id'=>$usuario->id] }}" method="POST" class="form" enctype="multipart/form-data">
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
    $(document).ready(function() {
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

