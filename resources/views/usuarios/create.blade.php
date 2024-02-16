@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('/css/global.css')}}">
<link rel="stylesheet" href="{{ asset('/css/createUser.css')}}">
@endsection
@section('title', 'Cadastro')

@section('content')
<main>
  <div class="learn-code">
      <h2 class="learn__h2">
        Aprenda a <strong>Programar</strong><br>com os maiores!
      </h2>
      <p class="learn__p">
      Pesquise e entre em contato com os maiores desenvolvedores!<br>Envie mensagens e troque experiências com quem tem bagagem de mercado!
      </p>
    </div>
    <div class="form-container">
      <div class="cta__container">
        Teste grátis por 7 dias, após isso R$20/mês.
      </div>

      {{-- Use a helper route para referenciar os actions e hrefs do seu projeto --}}
      <form action="{{ route('usuario.store') }}" method="POST" class="form" enctype="multipart/form-data">
      {{-- <form action="/usuarios" method="POST" class="form"> --}}
      @csrf
      <div class="input__container">
        <input class="input-text" type="text" name="primeiroNome" id="primeiroNome" placeholder="Nome">
        <input class="input-text" type="text" name="ultimoNome" id="ultimoNome" placeholder="Sobrenome">
        <input class="input-text" type="text" name="usuario" id="usuario" placeholder="Nome de usuário">
        <input type="file" name="image" id="image">
        <input class="input-text" type="email" name="email" id="email" placeholder="E-mail">
        <input class="input-text" type="password" name="senha" id="senha" placeholder="Senha">
        <input class="input-button" type="submit" value="Solicitar teste gratuito">
      </div>
    </form>
  </div>
</main>
@endsection

