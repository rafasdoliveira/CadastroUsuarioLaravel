@extends('layouts.main')
@section('style')

{{-- Use a helper  asset em todas as referencias de css, js, imagens, fonts, etc--}}
<link rel="stylesheet" href="{{ asset('/css/global.css') }}">
<link rel="stylesheet" href="{{ asset('/css/welcome.css') }}">
@endsection

@section('title', 'Frontend Mentor | Intro component with sign up form')

@section('content')
<div class="welcome">
    <h2 class="learn__h2">
      Bem Vindo ao CodingExperience!
      <p>Validação!</p>
    </h2>
    <p>Lugar onde você vai aprender com pessoas que já estão no mercado!</p>
</div>
@endsection


