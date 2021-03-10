<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saludo</title>
</head>
<style>
    .active
    {
     text-decoration:none;
      color: green;
    }

    .error {
        color: red;
        font.size:12px;
    }

</style>

<body>
    <header>
    {{-- DANDOLE UNA FUNCION --}}
     <?php function activeMenu($url)
     {
         return request()->is($url) ? 'active' : '';
     }
     ?>

     <nav>
     <a class="{{ activeMenu('home')}}" href="{{ route('home')}}">HOME</a>
     <a class="{{ request()-> is('saludos/*') ? 'active' : '' }}" href="{{ route('saludos', 'jorge')}}">Saludos</a>
     <a class="{{ request()-> is('contactame') ? 'active' : '' }}" href="{{ route('contactos')}}">contactos</a>

     </nav>

    </header>
    @yield('contenido')

    <footer>
        Copyrigth {{date('Y')}}

    </footer>

</body>

</html>
