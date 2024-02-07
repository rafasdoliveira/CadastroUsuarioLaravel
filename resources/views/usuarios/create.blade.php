@extends('layouts.main')
<link rel="stylesheet" href="/css/welcome.css">
@section('title', 'Frontend Mentor | Intro component with sign up form')

@section('content')
<div class="learn-code">
    <h2 class="learn__h2">
      Learn to code by<br>watching others
    </h2>
    <p class="learn__p">
      See how experienced developers solve problems in real-time.<br>Watching scripted tutorials is great, but understanding how developers think is invaluable. 
    </p>
  </div>
  <div class="form-container">
    <div class="cta__container">
      Try it free 7 days then $20/mo. thereafter
    </div>
  <form action="/usuarios" method="POST" class="form">
    @csrf
    <div class="input__container">
      <input class="input-text" type="text" name="primeiroNome" id="primeiroNome" placeholder="First Name">
      <input class="input-text" type="text" name="ultimoNome" id="ultimoNome" placeholder="Last Name">
      <input class="input-text" type="email" name="email" id="email" placeholder="E-mail Address">
      <input class="input-text" type="password" name="senha" id="senha" placeholder="Password">
      <input class="input-button" type="submit" value="Claim your free trial ">    
    </div>
    <p>
      By clicking the button, you are agreeing to our Terms and Services
    </p>
  </form>    
</div>
@endsection    
  
