<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/Bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/index.css') }}">
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery-ui.min.css') }}">
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
                            <a href="{{ url('/home') }}">Inicio</a>
                        @else
                            <a href="{{ route('login') }}">Iniciar sesion</a>


                        @endauth
                    @endif
                </div>

                <div
                    class="col-12 col-sm-2 col-md-1 col-lg-1 d-flex align-items-center justify-content-center links d-none d-md-block">
                    <a href="{{ route('Perfil') }}">
                        <img src="{{ asset('images/yasuo.svg') }}" alt="" class=" avatar rounded-circle">
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
                        <a href="{{ route('Perfil') }}">
                            <img src="{{ asset('images/yasuo.svg') }}" alt="" class=" avatar rounded-circle">
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

            <form action="{{ route('buscar_talleres') }}" method="get" id="buscar"
                class="col-sm-6 col-md-12 col-lg d-flex flex-column-reverse flex-sm-column-reverse flex-md-row-reverse flex-lg-row w-100 p-0">
                @csrf

                <div
                    class=" fs col-12 col-sm-12 col-md-6 col-lg-2 d-flex justify-content-center align-items-center gris pb-5 pb-md-0 pb-sm-5">
                    <button class="btn btn-danger w-75" type="submit">
                        <img src="{{ asset('Images/track.svg') }}" alt="">
                    </button>
                </div>




                <div
                    class=" col-12 col-sm-12 col-md-6 col-lg-10 datos gris d-flex flex-column align-items-center justify-content-center align-items-sm-center align-items-lg-start text-center pb-5">
                    <h3 class="">Busca por municipio o estado</h3>
                    <input type="text" name="nombre" id="nombre" placeholder=" Ejempo: Tabasco..."
                        class=" form-control" required>
                </div>
            </form>
        </div>
        <div style="height: 5rem;" class=" d-sm-none">
        </div>


        <div style="height: 10rem;" class=" d-md-none">
        </div>

        @if (session('true'))
            <div class=" row text-bg-success" style="height: 13rem;">
                <div class=" col-12 d-flex justify-content-center align-items-end">
                    <i><img src="{{ asset('Images/calendar-check-fill.svg') }}" alt=""></i>
                </div>
                <div class=" col-12">
                    <h2 class="d-flex justify-content-center align-items-center text-center">{{ session('true') }}
                    </h2>
                </div>
            </div>
        @endif

        @if (session('fail'))
            <div class=" row text-bg-danger" style="height: 13rem;">
                <div class=" col-12 d-flex justify-content-center align-items-end">
                    <i><img src="{{ asset('Images/warning-fill.svg') }}" alt=""></i>
                </div>
                <div class=" col-12">
                    <h2 class="d-flex justify-content-center align-items-center text-center">{{ session('fail') }}
                    </h2>
                </div>
            </div>
        @endif

        <div class="d-flex justify-content-around pt-5 mt-5 row">
            @if (count($talleres) > 0)
                @foreach ($talleres as $item)
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 pb-4 d-flex justify-content-center">
                        <div class="card text-white rounded-5" style="background-color: var(--bs-gray-500); ">
                            <h2 class="fs-1 text-center pt-4 fw-bolder">{{ $item->nombre }}</h2>
                            <div class="card-body row d-flex justify-content-center ps-5 pe-5">
                                <div class="col-8 mb-3">
                                    <img src="{{ asset('images/taller.jpg') }}" alt=""
                                        class="card-img rounded-4">
                                </div>
                                <div class="col-12">
                                    <h3 class="fs-3"><img src="{{ asset('images/phone.svg') }}" alt="">
                                        {{ $item->telefono }}</h3>
                                    <h3 class="fs-3"><img src="{{ asset('images/email.svg') }}" alt="">
                                        {{ $item->correo }}</h3>
                                    <p class="fs-4 fst-italic text-justify">{{ $item->direccion }}</p>
                                </div>
                            </div>
                            <div class="card-footer mt-2 d-flex justify-content-around pb-4 pt-4">
                                <a href="#" class="text-white btn btn-primary w-50 me-2 fs-3 ">Ubicar</a>
                                <!-- Button trigger modal -->
                                <button href="#" class="text-white btn btn-primary w-50 ml-2 fs-3 enviar-cita"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->id }}">Agendar
                                    cita</button>

                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class=" modal fade " id="exampleModal-{{ $item->id }}" data-bs-backdrop="static"
                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl fs-1 modal-dialog-centered ">
                            <div class="modal-content ">
                                <div class="modal-header ps-5">
                                    <h1 class="modal-title fw-bold" id="exampleModalLabel">{{ $item->nombre }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>

                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('citas.agendar') }}"
                                        class="row d-flex justify-content-center" method="post">
                                        @csrf
                                        <div class=" row pe-5 ps-5">
                                            <div class=" col-6 d-flex flex-column">
                                                <label class=" form-label fs-2" for="nombre">Nombre</label>
                                                <input class=" form-control fs-3" type="text" name="nombre"
                                                    id="" value="{{ $usuario->name }}">
                                                <input type="text" name="taller_id" id=""
                                                    value="{{ $item->id }}" class=" d-none">
                                            </div>

                                            <div class=" col-6 d-flex flex-column">
                                                <label class=" form-label fs-2" for="correo">Correo</label>
                                                <input class=" form-control fs-2" type="email" name="correo"
                                                    id="" value="{{ $usuario->email }}">
                                            </div>

                                            <div class=" col-6">
                                                <label class=" form-label fs-2" for="telefono">Telefono</label>
                                                <input class=" form-control fs-2" type="number" name="telefono"
                                                    id="">
                                            </div>
                                            <div class=" col-6">
                                                <label class=" form-label fs-2" for="fecha">Fecha</label>
                                                <input class=" form-control fs-2" type="date" name="Fecha"
                                                    id="">
                                            </div>

                                            <div class=" pt-4">
                                                <h2>DATOS DE AUTOMOVIL</h2>
                                            </div>
                                            <div>
                                                <label class=" form-label fs-2" for="vehiculo">Vehiculo</label>
                                                <input class=" form-control fs-2" type="text" name="vehiculo"
                                                    id="">
                                                </select>
                                            </div>
                                            <div>
                                                <label class=" form-labe fs-2l" for="placas">Placas</label>
                                                <input class=" form-control fs-2" type="text" name="placas"
                                                    id="">
                                            </div>

                                            <div>
                                                <label class=" form-label fs-2"
                                                    for="observaciones">Observaciones</label>
                                                <input class=" form-control fs-2" type="text" name="observaciones"
                                                    id=""
                                                    placeholder="Describa los problemas que presenta su vehiculo">
                                            </div>
                                        </div>
                                        <div class="modal-footer mt-4">
                                            <button type="button" class="btn btn-danger fs-3"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-success fs-3">Agendar</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            @endif
        </div>
    </div>

</body>
<script src="{{ asset('CSS/Bootstrap/js/jquery-3.7.1.js') }}"></script>
<script src="{{ asset('jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
<script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>

<script>
    $('#nombre').autocomplete({
        source: function(request, response) {
            $.ajax({
                url: "{{ route('buscar.taller') }}",

                dataType: 'json',
                data: {
                    term: request.term

                },

                success: function(data) {
                    response(data)
                }
            })
        }
    });
</script>
<script>
    document.getElementById("nombre").addEventListener("input", function() {
        // Obtener el valor actual del input
        var texto = this.value;

        // Reemplazar los espacios en blanco con una cadena vacía
        var textoSinEspacios = texto.replace(/\s/g, '');

        // Si el valor ha cambiado, actualizar el input
        if (texto !== textoSinEspacios) {
            this.value = textoSinEspacios;
        }
    });
</script>
<script>
    const form = document.getElementById('buscar');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que se envíe el formulario

        if (form.nombre.value.trim() === '') {
            alert('Por favor, ingresa un nombre valido.');
            return;
        }

        // Si el campo no está vacío, se puede proceder con el envío del formulario
        form.submit();
    });
</script>

</html>
