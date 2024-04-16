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
<script>
    var res = function() {

        var not = confirm("estas seguro que quieres eliminar el registro?");
        return not;

    }
</script>

<body id="body" class=" bg-body-tertiary">
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

        <div class="options__menu">

            <a href="{{ route('home') }}">
                <div class="option">
                    <i><img src="{{ asset('images/reportes_off.svg') }}" alt=""></i>
                    <h4>Reportes</h4>
                </div>
            </a>

            <a href="{{ route('citas') }} ">
                <div class="option">
                    <i><img src="{{ asset('images/cita_off.svg') }}" alt=""></i>
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

            <a href="{{ route('historial') }}" class="selected">
                <div class="option">
                    <i><img src="{{ asset('images/historial_on.svg') }}" alt=""></i>
                    <h4>Venta</h4>
                </div>
            </a>
            <a href="{{ route('Perfil') }}" class="">
                <div class=" d-flex  align-items-center">
                    <i class=" pe-2"><img src="{{ asset('images/yasuo.svg') }}" alt=""
                            class=" avatar rounded-circle"></i>
                    <h4>Perfil</h4>
                </div>
            </a>

        </div>

    </div>

    <div class=" container-fluid ps-2 ps-md-4 pe-2 pe-md-4 ps-lg-5 pe-lg-5">
        <div class="row d-flex justify-content-center">
            <form action="{{ route('servicio.create') }}" method="get" class=" col-12 row bg-white rounded-4">
                <div class="col-12 d-flex justify-content-center pt-4 ">
                    <h2 class="fw-bold">FORMULARIO DE SERVICIOS</h2>
                </div>
                <div class=" col-12 col-xl-6">
                    <label for="" class="form-label">Cliente</label>
                    <input type="text" class="form-control" name="Nombre">
                </div>
                <div class=" col-12 col-xl-6">
                    <label for="" class="form-label">Vehiculo</label>
                    <input type="text" class="form-control" name="Vehiculo">
                </div>
                <div class=" col-12 col-xl-6">
                    <label for="" class="form-label">Placas</label>
                    <input type="text" class="form-control" name="Placas">
                </div>
                <div class=" col-12 col-xl-6">
                    <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control" name="Fecha">
                </div>
                <div>
                    <label for="" class="form-label">Servicios</label>
                    <textarea name="Servicios" rows="3" class=" form-control"></textarea>
                </div>
                <div class=" d-flex justify-content-end pt-4 pb-4">
                    <button class=" btn btn-primary pe-5 ps-5 fs-6" type="submit">Crear</button>
                </div>
            </form>
        </div>
        @if (session('true'))
            <div class="bg-success text-center alert text-white" role="alert">
                {{ session('true') }}
            </div>
        @endif

        @if (session('false'))
            <div class="bg-danger text-center alert text-white" role="alert">
                {{ session('false') }}
            </div>
        @endif
        <div class="row d-flex justify-content-center pt-5 mt-3 table-responsive">
            <div class="col-10 bg-white pt-4 rounded-4">
                <table class="table table-hover table-responsive table-bordered ">
                    <thead class=" table-primary">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Vehiculo</th>
                            <th scope="col">Placas</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Servicios</th>
                            <th scope="col">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($servicio as $item)
                            <tr>
                                <th>{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->vehiculo }}</td>
                                <td>{{ $item->Placas }}</td>
                                <td>{{ $item->fecha_servicio }}</td>
                                <td>{{ $item->Servicios }}</td>
                                <th class=" d-flex justify-content-around"><button type="button"
                                        class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal-{{ $item->id }}">Editar</button>
                                    <a type="button" class="btn btn-danger" onclick="return res()"
                                        href="{{ route('servicio.delete', $item->id) }}">Eliminar</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog fw-normal modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Servicios</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('servicio.update', $item->id) }}"
                                                        method="post" class="row">
                                                        @csrf
                                                        <input type="text" name="" id=""
                                                            class=" d-none" value="{{ $item->id }}"
                                                            name="id">
                                                        <div class=" col-12 col-lg-6">
                                                            <label for="" class="form-label">Cliente</label>
                                                            <input type="text" class="form-control" name="Nombre"
                                                                value="{{ $item->nombre }}">
                                                        </div>
                                                        <div class=" col-12 col-lg-6">
                                                            <label for="" class="form-label">Vehiculo</label>
                                                            <input type="text" class="form-control"
                                                                name="Vehiculo" value="{{ $item->vehiculo }}">
                                                        </div>
                                                        <div class=" col-12 col-lg-6">
                                                            <label for="" class="form-label">Placas</label>
                                                            <input type="text" class="form-control" name="Placas"
                                                                value="{{ $item->Placas }}">
                                                        </div>
                                                        <div class=" col-12 col-lg-6">
                                                            <label for="" class="form-label">Fecha</label>
                                                            <input type="date" class="form-control" name="Fecha"
                                                                value="{{ $item->fecha_servicio }}">
                                                        </div>
                                                        <div>
                                                            <label for="" class="form-label">Servicios</label>
                                                            <textarea name="Servicios" rows="3" class=" form-control">{{ $item->Servicios }}</textarea>
                                                        </div>
                                                        <div class="modal-footer mt-4">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Cerrar</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Guardar</button>
                                                        </div>
                                                    </form>
                                                </div>

                                                </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class=" d-flex justify-content-end altura">
                    {!! $servicio->links() !!}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
    <script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
