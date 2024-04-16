<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro</title>
    <link rel="stylesheet" href="{{ asset('CSS/Bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,500;1,700&display=swap">
</head>

<style>
    html {
        font-family: 'Poppins', sans-serif;
        font-size: 100% !important;

    }

    body {

        font-family: 'Poppins', sans-serif;
        background-color: #1B1B1B;
        overflow-x: hidden;
    }
</style>

<body>

    <body>
        <div class=" container d-flex justify-content-center align-items-center">
            <div class=" col-10 pt-5 mt-5 d-flex justify-content-center align-items-center">
                <form action="{{ route('talleres.create') }}" method="post"
                    class="form-register col-10 gris ps-4 pe-4 rounded-3 text-white">
                    @csrf

                    <div class=" pt-5">
                        <h4 class=" fw-bold fs-2 text-center">FORMULARIO DE REGISTRO PARA TALLER MECANICO</h4>
                    </div>

                    <div class=" pt-2">
                        <label for="" class=" form-label fs-4 fw-semibold">Nombre del taller</label>
                        <input class="form-control fs-4" type="text" name="nombre">
                    </div>

                    <div class=" pt-2">
                        <label for="" class=" form-label fs-4 fw-semibold">Correo</label>
                        <input class="form-control fs-4" type="email" name="correo" value="{{ $user->email }}">
                    </div>
                    <div class=" pt-2">
                        <label for="" class=" form-label fs-4 fw-semibold">Telefono</label>
                        <input class="form-control fs-4" type="text" name="telefono">
                    </div>

                    <div class=" pt-2">
                        <label for="" class=" form-label fs-4 fw-semibold">Direccion del taller</label>
                        <textarea rows="3" class="form-control fs-4 form-text" name="direccion"></textarea>
                    </div>


                    <div class=" pb-5 pt-3 d-flex justify-content-end">
                        <a href="{{ route('garegemet') }}" class=" btn btn-danger ms-3 ">No tengo un taller</a>
                        <button class="btn btn-success ms-3" type="submit  ">Registrar taller</button>

                    </div>


                </form>
            </div>
        </div>

    </body>
</body>

</html>
