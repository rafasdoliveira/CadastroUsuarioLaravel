@extends('layouts.main')
@section('style')
<link rel="stylesheet" href="{{ asset('/css/global.css') }}">
<link rel="stylesheet" href="{{ asset('/css/login.css')}}">
@endsection
@section('title', 'Login')

@section('content')
<div class="login">
    <h1>Login</h1>
    <p>Caso esteja cadastrado, preencha as informações:</p>
    <input class="input-text" type="email" name="email" id="email" placeholder="E-mail">
    <input class="input-text" type="password" name="senha" id="senha" placeholder="Senha">
    <input class="input-button" type="submit" value="Entrar">
</div>
@endsection
