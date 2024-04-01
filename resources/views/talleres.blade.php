<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/Bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,500;1,700&display=swap"
        rel="stylesheet">
    <title>GarageMet</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="nav">
            <nav class="nav">
                <div
                    class=" col-12 col-sm-8 col-md-9 col-lg-10 p-0 p-sm-5 pt-sm-0 pb-sm-0 pe-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center font-weight-bold logo">
                    <h1 class=" font-weight-bold">GarageMet</h1>
                </div>

                <div class=" col-12 col-sm-2 col-md-2 col-lg-1 d-flex align-items-center justify-content-center links">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>


                        @endauth
                    @endif
                </div>

                <div class="col-12 col-sm-2 col-md-1 col-lg-1 d-flex align-items-center justify-content-center links">
                    <a href="{{ route('garegemet') }}">
                        <img src="{{ asset('images/yasuo.jpg') }}" alt="" class=" avatar rounded-circle">
                    </a>
                </div>
            </nav>
        </div>

        <div class="row buscar">
            <div
                class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center text-center gris pt-5 pt-sm-5 pb-5">
                <h1 class="titulo w-100 text-bold">LOCALIZA TU TALLER MECANICO</h1>
            </div>

            <div
                class="col-sm-6 col-md-12 col-lg d-flex flex-column-reverse flex-sm-column-reverse flex-md-row-reverse flex-lg-row w-100 p-0">
                <div
                    class="col-12 col-sm-12 col-md-6 col-lg-2 d-flex justify-content-center align-items-center gris pb-5 pb-md-0 pb-sm-5">
                    <a href="#" class="btn btn-danger w-75">
                        <img src="{{ asset('Images/track.svg') }}" alt="">
                    </a>
                </div>

                <div
                    class=" col-12 col-sm-12 col-md-6 col-lg-10 datos gris d-flex flex-column align-items-center justify-content-center align-items-sm-center align-items-lg-start text-center pb-5">
                    <h3 class="">Busca por estado o municipio</h3>
                    <input type="text">
                </div>
            </div>
        </div>


        <div class=" d-flex justify-content-around pt-5 row-cols-1">
            <div class="col-3">
                <div class="card bg-dark-subtle">
                    <div class=" card-header">
                        <img src="{{ asset('images/escapar.jpg') }}" alt="" class=" card-img">
                    </div>
                    <div class="card-body">
                        <h2 class="fs-2 text-center">Taller Mecanico Dominguez</h2>
                        <h3 class=" fs-3">9361140771</h3>
                        <h3 class=" fs-3">davidgarcia2809@gmail.com</h3>
                        <p class=" fs-4 fst-italic">C. plutarco elias calle s/n, Plutarco Elias Calles, 86170 Villahermosa, Tab.
                        </p>
                    </div>
                    <div class=" card-footer">
                        <a href="#" class="btn btn-secondary btn-lg">Ubicar</a>
                        <a href="#" class="btn btn-secondary btn-lg">Agendar cita</a>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="card bg-dark-subtle">
                    <div class=" card-header">
                        <img src="{{ asset('images/escapar.jpg') }}" alt="" class=" card-img">
                    </div>
                    <div class="card-body">
                        <h2 class="fs-2 text-center">Taller Mecanico Dominguez</h2>
                        <h3 class=" fs-3">9361140771</h3>
                        <h3 class=" fs-3">davidgarcia2809@gmail.com</h3>
                        <p class=" fs-4 fst-italic">C. plutarco elias calle s/n, Plutarco Elias Calles, 86170 Villahermosa, Tab.
                        </p>
                    </div>
                    <div class=" card-footer">
                        <a href="#" class="btn btn-secondary btn-lg">Ubicar</a>
                        <a href="#" class="btn btn-secondary btn-lg">Agendar cita</a>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="card bg-dark-subtle">
                    <div class=" card-header">
                        <img src="{{ asset('images/escapar.jpg') }}" alt="" class=" card-img">
                    </div>
                    <div class="card-body">
                        <h2 class="fs-2 text-center">Taller Mecanico Dominguez</h2>
                        <h3 class=" fs-3"><img src="{{asset("images/phone.svg")}}" alt=""> 9361140771</h3>
                        <h3 class=" fs-3"><img src="{{asset("images/email.svg")}}" alt=""> davidgarcia2809@gmail.com</h3>
                        <p class=" fs-4 fst-italic text-justify">C. plutarco elias calle s/n, Plutarco Elias Calles, 86170 Villahermosa, Tab.
                        </p>
                    </div>
                    <div class=" card-footer mt-2 d-flex justify-content-around">
                        <a href="#" class="btn btn-secondary btn-lg w-50 ">Ubicar</a>
                        <a href="#" class="btn btn-secondary btn-lg w-50 ">Agendar cita</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>

</html>
