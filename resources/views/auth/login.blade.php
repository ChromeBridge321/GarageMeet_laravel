<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro</title>
   <link rel="stylesheet" href="{{asset('CSS/css3.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,500;1,700&display=swap">
</head>

<body>

       <form action="{{route('login')}}" method="post" class="form-register" >
       @csrf
            <h4>INICIO DE SESION</h4>
            <input class="controls"  type="email" name="email" id="nombres" placeholder="Correo electronico">
            <input class="controls" type="password" inputmode="verbatim" name="password" id="correo" placeholder="Contraseña">
            <button class="botons"><a class="text-white fw-bold text-decoration-none"
                    href="">Entrar</a></button>
            <p>No tienes cuenta? <a href="{{route('register')}}">registrarse</a></p>
        </form>
</body>

</html>