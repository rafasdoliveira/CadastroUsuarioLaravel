<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    @yield('style')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>
  <header>
    <div class="header__title">
      <h1>
        <a href="/">CodingExperience</a>
      </h1>
    </div>
    <div class="links">
      <ul class="ul__welcome">
        <li class="li__welcome"><a href="{{route('usuario.login')}}">LOGIN</a></li>
        <li class="li__welcome"><a href="{{route('usuario.create')}}">INSCREVA-SE</a></li>
        <li class="li__welcome"><a href="{{route('usuario.cadastrados')}}">INSCRITOS</a></li>
      </ul>
    </div>
  </header>
    <body>
        @yield('content')
        <script>
            @if (@session('msg'))
                alert('Cadastro realizado com sucesso!\nRealize o login!')
            @endif
        </script>
        <footer>
        <p class="attribution">
          Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
          &copy;
          Coded by <a href="https://www.linkedin.com/in/rafasdoliveira" target="_blank"
          />Rafael Oliveira</a>.
        </p>
      </footer>
    </body>
</html>
