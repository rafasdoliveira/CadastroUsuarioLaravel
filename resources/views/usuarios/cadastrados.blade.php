@extends('layouts.main')

@section('title', 'Frontend Mentor | Intro component with sign up form')

@section('content')
<div class="usuarios_cadastrados">
    <div class="usuarios__title">
      <h2>Usuários Cadastrados</h2>
    </div>
      <div class="labels">
        <span class="span">Primeiro Nome:</span>
        <span class="span">Último Nome:</span>
        <span class="span">E-mail:</span>
        <span class="span">Senha:</span>
      </div>
      <div class="foreach">
          @foreach($usuarios as $usuario)
          <div class="lista">
            <div class="naoconsigoinventarnome">
              <span>{{ $usuario -> primeiroNome}}</span>
            </div>
            <div class="naoconsigoinventarnome">
              <span>{{ $usuario -> ultimoNome}}</span>
            </div>
          </div>

          <!-- <span class="lista">{{ $usuario -> ultimoNome}}</span> -->
          @endforeach
      </div>        
  </div>
</div>
@endsection    
  
