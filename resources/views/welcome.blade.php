@extends('layouts.main')

@section('style')
<link rel="stylesheet" href="/css/welcome.css">
@endsection

@section('title', 'Frontend Mentor | Intro component with sign up form')

@section('content')
<div class="learn-code">
    <h2 class="learn__h2">
      Clique para se cadastrar
    </h2>
    <a href="usuarios/login">LOGIN</a>
    <a href="usuarios/create">CADASTRO DE NOVOS USUÁRIO</a>
    <a href="usuarios/cadastrados">VISUALIZAR CADASTRADOS</a>
  </div>
</div>
@endsection    
  
