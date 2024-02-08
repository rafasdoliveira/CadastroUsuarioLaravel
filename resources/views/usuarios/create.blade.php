@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="/css/global.css">
<link rel="stylesheet" href="/css/createUser.css">
@endsection
@section('title', 'Cadastro')

@section('content')
<main>
  <div class="learn-code">
      <h2 class="learn__h2">
        Aprenda a <strong>Programar</strong><br>com lives
      </h2>
      <p class="learn__p">
      Veja como desenvolvedores experientes resolvem problemas em tempo real.<br>Assistir tutoriais com script é ótimo, mas entender como os desenvolvedores pensam é inestimável.
      </p>
    </div>
    <div class="form-container">
      <div class="cta__container">
        Teste grátis por 7 dias, após isso R$20/mês.
      </div>

      {{-- Use a helper route para referenciar os actions e hrefs do seu projeto --}}
      <form action="{{ route('usuario.store') }}" method="POST" class="form">
      {{-- <form action="/usuarios" method="POST" class="form"> --}}

      @csrf
      <div class="input__container">
        <input class="input-text" type="text" name="primeiroNome" id="primeiroNome" placeholder="Nome">
        <input class="input-text" type="text" name="ultimoNome" id="ultimoNome" placeholder="Sobrenome">
        <input class="input-text" type="email" name="email" id="email" placeholder="E-mail">
        <input class="input-text" type="password" name="senha" id="senha" placeholder="Senha">
        <input class="input-button" type="submit" value="Solicitar teste gratuito">
      </div>
    </form>
  </div>
</main>
@endsection

