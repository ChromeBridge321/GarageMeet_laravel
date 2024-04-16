<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('CSS/Bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/estilos.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,100;1,500;1,700&display=swap"
        rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <header>
        <div class="icon__menu">
            <i id="btn_open"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="#ffffff"
                    viewBox="0 0 256 256">
                    <path
                        d="M224,120v16a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V120a8,8,0,0,1,8-8H216A8,8,0,0,1,224,120Zm-8,56H40a8,8,0,0,0-8,8v16a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V184A8,8,0,0,0,216,176Zm0-128H40a8,8,0,0,0-8,8V72a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V56A8,8,0,0,0,216,48Z">
                    </path>
                </svg></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ffffff"
                    viewBox="0 0 256 256">
                    <path
                        d="M247.43,117l-14-35A15.93,15.93,0,0,0,218.58,72H184V64a8,8,0,0,0-8-8H24A16,16,0,0,0,8,72V184a16,16,0,0,0,16,16H41a32,32,0,0,0,62,0h50a32,32,0,0,0,62,0h17a16,16,0,0,0,16-16V120A8.13,8.13,0,0,0,247.43,117ZM72,208a16,16,0,1,1,16-16A16,16,0,0,1,72,208ZM24,136V72H168v64Zm160,72a16,16,0,1,1,16-16A16,16,0,0,1,184,208Zm0-96V88h34.58l9.6,24Z">
                    </path>
                </svg></i>
            <h4 class="m-0">GarageMet</h4>
        </div>

        <div class="options__menu h-100">

            <a href="{{ route('home') }}">
                <div class="option">
                    <i><img src="{{ asset('images/reportes_off.svg') }}" alt=""></i>
                    <h4>Reportes</h4>
                </div>
            </a>

            <a href="{{ route('citas') }} " class="selected">
                <div class="option">
                    <i><img src="{{ asset('images/cita_on.svg') }}" alt=""></i>
                    <h4>Citas</h4>
                </div>
            </a>

            <a href="{{ route('empleados') }}">
                <div class="option">
                    <i><img src="{{ asset('images/empleados_off.svg') }}" alt=""></i>
                    <h4>Empleados</h4>
                </div>
            </a>

            <a href="{{ route('clientes') }}">
                <div class="option">
                    <i><img src="{{ asset('images/clientes_off.svg') }}" alt=""></i>
                    <h4>Clientes</h4>
                </div>
            </a>

            <a href="{{ route('historial') }}">
                <div class="option">
                    <i><img src="{{ asset('images/historial.svg') }}" alt=""></i>
                    <h4>Venta</h4>
                </div>
                <div class=" perfil h-100 d-flex justify-content-center align-items-end ">
                    <div class="col-3 me-1">
                        <a href="{{ route('Perfil') }}">
                            <img src="{{ asset('images/yasuo.svg') }}" alt="" class=" avatar rounded-circle">
                        </a>
                    </div>

                    <div class="col">
                        <a class=" h6" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesion') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <img src="{{ asset('images/salir.svg') }}" alt="">
                    </div>
                </div>
        </div>

    </div>



    <div class=" container-fluid p-5">

        @if (session('true'))
            <div class=" alert text-bg-success">
                {{ session('true') }}
            </div>
        @endif
        @if (session('false'))
            <div class=" alert text-bg-danger">
                {{ session('false') }}
            </div>
        @endif

        <div class="row d-flex justify-content-around pt-3 pe-0 alert alert-light align-items-center pb-3">
            <form action="{{ route('citas.buscar') }}" method="GET" class="row">
                @csrf
                <div action="" class="search  col-8 col-lg-6 col-xl-8">
                    <img src="{{ asset('Images/buscar.svg') }}">
                    <input type="text" placeholder="Buscar cliente" id="search" name="nombre">
                </div>
                <div class="col-4 col-lg-2 pt-2 d-flex justify-content-center col-xl">
                    <button type="submit" class="btn btn-secondary">
                        Buscar
                    </button>
                </div>
                <div class="col-6 col-lg-2 pt-2 d-flex justify-content-center col-xl">
                    <a type="submit" class="btn btn-warning " href="{{ route('citas') }}">
                        Mostrar todo
                    </a>
                </div>
                <div class="d-flex justify-content-center col-6 col-lg-2 pt-2  col-xl">
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"
                        class=" btn btn-primary">
                        Añadir cliente
                    </button>
                </div>
            </form>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog fw-normal modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva cita</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('agendar.cita') }}" method="post" class="row">
                                @csrf
                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Nombre</label>
                                    <input type="text" class=" form-control" name="Nombre">
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Correo</label>
                                    <input type="email" class=" form-control" name="Correo">
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Telefono</label>
                                    <input type="number" class=" form-control" name="Telefono">
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Fecha</label>
                                    <input type="date" class=" form-control" name="Fecha">
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Vehiculo</label>
                                    <input type="text" class=" form-control" name="Vehiculo">
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Placas</label>
                                    <input type="text" class=" form-control" name="Placas">
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="" class=" form-label">Observaciones</label>
                                    <textarea class="form-control" rows="3" value="" name="Observaciones"></textarea>
                                </div>

                                <div class=" col-12 col-lg-6">
                                    <label for="estado" class=" form-label ">Estado</label>
                                    <select name="estado" id="" class=" form-select">
                                        <option value=""></option>
                                        <option value="1">Activa</option>
                                        <option value="0">Inactiva</option>
                                    </select>
                                </div>
                                <div class="modal-footer mt-4">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="col-12 mt-2 table-responsive">
            <table class="table table-light table-responsive table-striped table-bordered">
                <thead>
                    <tr class=" table-primary">
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Vehiculo</th>
                        <th scope="col">Placas</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Oberservaciones</th>
                        <th scope="col" class=" text-center">Accion</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider ">
                    @foreach ($citas as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->Nombre }}</td>
                            <td>{{ $item->Correo }}</td>
                            <td>{{ $item->Telefono }}</td>
                            <td>{{ $item->Vehiculo }}</td>
                            <td>{{ $item->Placas }}</td>
                            @if ($item->estado == 1)
                                <td> <button type="button" class="btn text-bg-success w-100">Activo</button></td>
                            @else
                                <td><button type="button" class="btn text-bg-danger w-100">Inactivo</button></td>
                            @endif
                            <td>{{ $item->fecha_cita }}</td>
                            <td>{{ $item->observaciones }}</td>
                            <th><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal-{{ $item->id }}">Editar</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog fw-normal modal-xl modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Citas</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('actualizar.cita') }}" method="post"
                                                    class="row">
                                                    @csrf
                                                    <input type="text" name="ID" value="{{ $item->id }}"
                                                        class=" d-none">
                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label">Nombre</label>
                                                        <input type="text" class=" form-control"
                                                            value="{{ $item->Nombre }}" name="Nombre">
                                                    </div>

                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label">Correo</label>
                                                        <input type="text" class=" form-control"
                                                            value="{{ $item->Correo }}" name="Correo">
                                                    </div>

                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label">Telefono</label>
                                                        <input type="text" class=" form-control"
                                                            value="{{ $item->Telefono }}" name="Telefono">
                                                    </div>

                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label">Fecha</label>
                                                        <input type="date" class=" form-control"
                                                            value="{{ $item->fecha_cita }}" name="Fecha">
                                                    </div>

                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label">Vehiculo</label>
                                                        <input type="text" class=" form-control"
                                                            value="{{ $item->Vehiculo }}" name="Vehiculo">
                                                    </div>

                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label">Placas</label>
                                                        <input type="text" class=" form-control"
                                                            value="{{ $item->Placas }}" name="Placas">
                                                    </div>

                                                    <div>
                                                        <label for="Observaciones"
                                                            class=" form-label">Observaciones</label>
                                                        <textarea class="form-control" rows="3" value="" name="Observaciones">{{ $item->observaciones }}</textarea>
                                                    </div>

                                                    <div class=" col-12 col-lg-6">
                                                        <label for="" class=" form-label ">Estado
                                                            actual</label>
                                                        <select name="estado" id="" class=" form-select">
                                                            @if ($item->estado == 1)
                                                                <option value="">Activa</option>
                                                            @endif
                                                            @if ($item->estado == 0)
                                                                <option value="">Inactiva</option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                    <div class=" col-12 col-lg-6">
                                                        <label for="estado" class=" form-label ">Nuevo
                                                            estado</label>
                                                        <select name="estado" id="" class=" form-select">
                                                            <option value="{{ $item->estado }}"></option>
                                                            <option value="1">Activa</option>
                                                            <option value="0">Inactiva</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer mt-4">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cerrar</button>
                                                        <button type="submit"
                                                            class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <div class=" d-flex justify-content-end altura">
                {!! $citas->links() !!}
            </div>
        </div>
    </div>


    <script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
    <script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
