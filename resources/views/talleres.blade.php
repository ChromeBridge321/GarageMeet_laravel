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
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <title>GarageMet</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row w-100" id="nav">
            <nav class="nav" id="nav">
                <div
                    class=" col-7 col-sm-6 col-md-9 col-lg-10 p-0 p-sm-5 pt-sm-0 pb-sm-0 pe-sm-0 d-flex justify-content-center justify-content-sm-start align-items-center font-weight-bold logo">
                    <h1 class=" font-weight-bold">GarageMet</h1>
                </div>

                <div
                    class=" col-12 col-sm-2 col-md-2 col-lg-1 d-flex align-items-center justify-content-center links d-none d-md-block">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>


                        @endauth
                    @endif
                </div>

                <div
                    class="col-12 col-sm-2 col-md-1 col-lg-1 d-flex align-items-center justify-content-center links d-none d-md-block">
                    <a href="{{ route('garegemet') }}">
                        <img src="{{ asset('images/yasuo.jpg') }}" alt="" class=" avatar rounded-circle">
                    </a>
                </div>

                <div class="col-5 pe-5 d-md-none d-flex justify-content-end ">
                    <a class="d-flex align-items-center justify-content-end" data-bs-toggle="collapse"
                        href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{ asset('images/bars.svg') }}" alt="">
                    </a>
                </div>
            </nav>
            <div class="arriba collapse position-fixed col-12 bg-black pt-5 mt-5" id="collapseExample">
                <div class="card bg-black border-0">
                    <div class=" col-12 d-flex align-items-center justify-content-center links mt-5">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Log in</a>


                            @endauth
                        @endif
                    </div>

                    <div class="col-12 d-flex align-items-center justify-content-center links pb-5">
                        <a href="{{ route('garegemet') }}">
                            <img src="{{ asset('images/yasuo.jpg') }}" alt="" class=" avatar rounded-circle">
                        </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="row buscar pt-5 mt-5">
            <div
                class="col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center text-center gris mt-5 mt-sm-5 pt-5 pt-sm-5 pb-5">
                <h1 class="titulo w-100 text-bold">LOCALIZA TU TALLER MECANICO</h1>
            </div>

            <form action="{{ route('buscar_talleres') }}" method="get"
                class="col-sm-6 col-md-12 col-lg d-flex flex-column-reverse flex-sm-column-reverse flex-md-row-reverse flex-lg-row w-100 p-0">
                @csrf

                <div
                    class="col-12 col-sm-12 col-md-6 col-lg-2 d-flex justify-content-center align-items-center gris pb-5 pb-md-0 pb-sm-5">
                    <button class="btn btn-danger w-75" type="submit">
                        <img src="{{ asset('Images/track.svg') }}" alt="">
                    </button>
                </div>




                <div
                    class=" col-12 col-sm-12 col-md-6 col-lg-10 datos gris d-flex flex-column align-items-center justify-content-center align-items-sm-center align-items-lg-start text-center pb-5">
                    <h3 class="">Busca por estado o municipio</h3>
                    <input type="text" name="nombre">
                </div>
            </form>
        </div>
        <div style="height: 5rem;" class=" d-sm-none">
        </div>
        <div style="height: 10rem;" class=" d-md-none">
        </div>

        <div class=" d-flex justify-content-around pt-5 mt-5 row ">

            @foreach ($talleres as $item)
                <div class=" col-12 col-sm-12 col-md-6 col-lg-4 pb-4 d-flex justify-content-center">
                    <div class="card text-white" style="background-color: var( --bs-gray-500);">
                        <h2 class="fs-1 text-center">{{ $item->nombre }}</h2>
                        <div class=" card-body row d-flex justify-content-center ps-5 pe-5">
                            <div class="col-8 mb-3">
                                <img src="{{ asset('images/taller.jpg') }}" alt="" class=" card-img rounded-4">
                            </div>
                            <div class="col-12">
                                <h3 class=" fs-3"><img src="{{ asset('images/phone.svg') }}" alt="">
                                    {{ $item->telefono }}</h3>
                                <h3 class=" fs-3"><img src="{{ asset('images/email.svg') }}" alt="">
                                    {{ $item->correo }}</h3>
                                <p class=" fs-4 fst-italic text-justify">{{ $item->direccion }}</p>
                            </div>

                        </div>
                        <div class=" card-footer mt-2 d-flex justify-content-around pb-4 pt-4">
                            <a href="#" class="text-white btn btn-primary w-50 me-2 fs-3 ">Ubicar</a>
                            <a href="#" class="text-white btn btn-primary w-50 ml-2 fs-3 ">Agendar cita</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
<script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
<script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>

</html>
