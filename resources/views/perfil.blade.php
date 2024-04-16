<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>hola {{ $user->name }}</h1>
    <h3> <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
            Cerrar Sesion
        </a>
        <a href="{{ route('garegemet') }}">
            home
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </h3>
</body>

</html>
