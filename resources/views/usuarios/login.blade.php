@extends('layouts.main')

@section('title', 'Login')

@section('content')
<div class="login">
    <h1>Login</h1>
    <input class="input-text" type="email" name="email" id="email" placeholder="E-mail">
    <input class="input-text" type="password" name="senha" id="senha" placeholder="Senha">
    <input class="input-button" type="submit" value="Entrar">    
</div>
@endsection