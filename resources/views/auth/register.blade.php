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

  <body>
    <form action="{{route('register')}}" method="post" class="form-register">
      @csrf
      <h4>FORMULARIO DE REGISTRO</h4>
      <input class="controls" type="text" name="name" id="nombres" placeholder="Nombre">
      <input class="controls" type="email" name="email" id="correo" placeholder="Correo">
      <input class="controls" type="password" name="password" id="correo" placeholder="Ingrese una contraseña">
      <input class="controls" type="password" name="password_confirmation" id="correo" placeholder="Ingrese una contraseña">

      <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
      <button class="botons" type="submit ">Registrarse</button>


      <p><a href="{{route('login')}}">¿Ya tienes una cuenta?</a></p>
    </form>

  </body>
</body>

</html>