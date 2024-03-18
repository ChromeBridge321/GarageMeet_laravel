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

        <div class="options__menu">

            <a href="{{ route('home') }}">
                <div class="option">
                    <i class="" title="Reportes"><svg xmlns="http://www.w3.org/2000/svg" width="30"
                            height="30" fill="#ffffff" viewBox="0 0 256 256">
                            <path
                                d="M232,208a8,8,0,0,1-8,8H32a8,8,0,0,1,0-16h8V136a8,8,0,0,1,8-8H72a8,8,0,0,1,8,8v64H96V88a8,8,0,0,1,8-8h32a8,8,0,0,1,8,8V200h16V40a8,8,0,0,1,8-8h40a8,8,0,0,1,8,8V200h8A8,8,0,0,1,232,208Z">
                            </path>
                        </svg></i>
                    <h4>Inicio</h4>
                </div>
            </a>

            <a href="{{ route('citas') }}">
                <div class="option">
                    <i title="Citas"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="#ffffff" viewBox="0 0 256 256">
                            <path
                                d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM169.66,133.66l-48,48a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L116,164.69l42.34-42.35a8,8,0,0,1,11.32,11.32ZM48,80V48H72v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80Z">
                            </path>
                        </svg></i>
                    <h4>Citas</h4>
                </div>
            </a>

            <a href="{{ route('empleados') }}" class="selected">
                <div class="option">
                    <i title="Empleados"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="#ffffff" viewBox="0 0 256 256">
                            <path
                                d="M64.12,147.8a4,4,0,0,1-4,4.2H16a8,8,0,0,1-7.8-6.17,8.35,8.35,0,0,1,1.62-6.93A67.79,67.79,0,0,1,37,117.51a40,40,0,1,1,66.46-35.8,3.94,3.94,0,0,1-2.27,4.18A64.08,64.08,0,0,0,64,144C64,145.28,64,146.54,64.12,147.8Zm182-8.91A67.76,67.76,0,0,0,219,117.51a40,40,0,1,0-66.46-35.8,3.94,3.94,0,0,0,2.27,4.18A64.08,64.08,0,0,1,192,144c0,1.28,0,2.54-.12,3.8a4,4,0,0,0,4,4.2H240a8,8,0,0,0,7.8-6.17A8.33,8.33,0,0,0,246.17,138.89Zm-89,43.18a48,48,0,1,0-58.37,0A72.13,72.13,0,0,0,65.07,212,8,8,0,0,0,72,224H184a8,8,0,0,0,6.93-12A72.15,72.15,0,0,0,157.19,182.07Z">
                            </path>
                        </svg></i>
                    <h4>Empleados</h4>
                </div>
            </a>

            <a href="{{ route('clientes') }}">
                <div class="option">
                    <i title="Clientes"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="#ffffff" viewBox="0 0 256 256">
                            <path
                                d="M230.4,219.19A8,8,0,0,1,224,232H32a8,8,0,0,1-6.4-12.8A67.88,67.88,0,0,1,53,197.51a40,40,0,1,1,53.93,0,67.42,67.42,0,0,1,21,14.29,67.42,67.42,0,0,1,21-14.29,40,40,0,1,1,53.93,0A67.85,67.85,0,0,1,230.4,219.19ZM27.2,126.4a8,8,0,0,0,11.2-1.6,52,52,0,0,1,83.2,0,8,8,0,0,0,12.8,0,52,52,0,0,1,83.2,0,8,8,0,0,0,12.8-9.61A67.85,67.85,0,0,0,203,93.51a40,40,0,1,0-53.93,0,67.42,67.42,0,0,0-21,14.29,67.42,67.42,0,0,0-21-14.29,40,40,0,1,0-53.93,0A67.88,67.88,0,0,0,25.6,115.2,8,8,0,0,0,27.2,126.4Z">
                            </path>
                        </svg></i>
                    <h4>Clientes</h4>
                </div>
            </a>

            <a href="{{ route('historial') }}">
                <div class="option">
                    <i title="Historial"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                            fill="#ffffff" viewBox="0 0 256 256">
                            <path
                                d="M224,128A96,96,0,0,1,62.11,197.82a8,8,0,1,1,11-11.64A80,80,0,1,0,71.43,71.43C67.9,75,64.58,78.51,61.35,82L77.66,98.34A8,8,0,0,1,72,112H32a8,8,0,0,1-8-8V64a8,8,0,0,1,13.66-5.66L50,70.7c3.22-3.49,6.54-7,10.06-10.55A96,96,0,0,1,224,128ZM128,72a8,8,0,0,0-8,8v48a8,8,0,0,0,3.88,6.86l40,24a8,8,0,1,0,8.24-13.72L136,123.47V80A8,8,0,0,0,128,72Z">
                            </path>
                        </svg></i>
                    <h4>Historial</h4>
                </div>
            </a>

            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>


            <a href="{{ route('garegemet') }}">
                home
            </a>

        </div>

    </div>

    <div class=" container-fluid p-5">
        <div class="row col-12 d-flex justify-content-center">
            <div class="row d-flex justify-content-end">
                <div class="pt-3 mt-3">
                    @if (session('correcto'))
                        <div class="alert bg-success text-white " role="alert">
                            Datos guardados correctamente
                        </div>
                    @endif

                    @if (session('incorrecto'))
                        <div class="alert bg-danger text-white " role="alert">
                            Los datos no se han podido guardar
                        </div>
                    @endif

                    @if (session('editrue'))
                        <div class="alert bg-success text-white " role="alert">
                            Datos actualizados correctamente
                        </div>
                    @endif

                    @if (session('editfalse'))
                        <div class="alert bg-danger text-white " role="alert">
                            Datos no actualizados correctamente
                        </div>
                    @endif

                    @if (session('deletetrue'))
                        <div class="alert bg-success text-white " role="alert">
                            Empleado ha sido eliminado correctamente
                        </div>
                    @endif

                    @if (session('deletefalse'))
                        <div class="alert bg-danger text-white " role="alert">
                            Empleado no ha sido eliminado correctamente
                        </div>
                    @endif

                    <script>
                        var res = function() {

                            var not = confirm("estas seguro que quieres eliminar el registro?");
                            return not;

                        }
                    </script>

                </div>
                <div class="col-2 d-flex justify-content-end pt-1"><button data-bs-toggle="modal"
                        data-bs-target="#ModalAnadir" type="button" class=" btn btn-primary">Añadir</button></div>
            </div>
            <!-- Modal para anadir -->
            <div class="modal fade h-100" id="ModalAnadir" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-dark">
                            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Añadir Nuevo Cliente</h1>
                            <button type="button" class=" bg-white btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-dark ">
                            <form action="{{ route('empleados.create') }}" method="post">
                                @csrf

                                <div class="col-12 d-flex flex-column w-100">
                                    <label for="" class="form-label text-bg-dark">Nombre</label>
                                    <input type="text" class="w-100 form-check-input" name="Nombre">
                                </div>

                                <div class="col-12 d-flex flex-column">
                                    <label for="" class="form-label">Correo</label>
                                    <input type="email" class="w-100 w-100 form-check-input" name="Correo">
                                </div>

                                <div class="col-12 d-flex flex-column">
                                    <label for="" class=" form-label">Telefono</label>
                                    <input type="number" class="w-100 form-check-input" name="Telefono">
                                </div>

                                <div class="col-12 d-flex flex-column">
                                    <label for="" class=" form-label">Direccion</label>
                                    <input type="text" class="w-100 form-check-input" name="Direccion">
                                </div>

                                <div class="col-12 d-flex flex-column">
                                    <label for="" class=" form-label">Cargo</label>
                                    <select name="Puesto" id="">
                                        @foreach ($tipos_cargos as $item)
                                            <option class=" text-black" value="{{ $item->id }}">
                                                {{ $item->nombre }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="modal-footer bg-dark">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-primary">Añadir</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12 mt-2 table-responsive">
                <table class="table table-hover table-dark table-responsive ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Accion</th>

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($personas as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->correo }}</td>
                                <td>{{ $item->telefono }}</td>
                                <td>{{ $item->direccion }}</td>
                                <td>{{ $item->tipo_cargo }}</td>
                                <th><button data-bs-toggle="modal" data-bs-target="#ModalEditar{{ $item->id }}"
                                        type="button" class="btn btn-primary">Editar</button>
                                    <a type="button" class="btn btn-danger" onclick="return res()"
                                        href="{{ route('empleados.delete', $item->id) }}">Eliminar</a>
                                </th>
                                <!-- Modal para editar -->
                                <div class="modal fade h-100" id="ModalEditar{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-dark">
                                                <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">
                                                    Cliente:
                                                    {{ $item->nombre }}</h1>
                                                <button type="button" class=" bg-white btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('empleados.update') }}" method="POST">
                                                @csrf
                                                <div class="modal-body bg-dark">
                                                    <div class="col-12 d-flex flex-column w-100">
                                                        <label for=""
                                                            class="form-label text-bg-dark">ID</label>
                                                        <input type="text" class="w-100 form-check-input"
                                                            name="ID" value="{{ $item->id }}" readonly>
                                                    </div>

                                                    <div class="col-12 d-flex flex-column w-100">
                                                        <label for=""
                                                            class="form-label text-bg-dark">Nombre</label>
                                                        <input type="text" class="w-100 form-check-input"
                                                            name="Nombre" value="{{ $item->nombre }}">
                                                    </div>

                                                    <div class="col-12 d-flex flex-column">
                                                        <label for="" class="form-label">Correo</label>
                                                        <input type="email" class="w-100 w-100 form-check-input"
                                                            name="Correo" value="{{ $item->correo }}">
                                                    </div>



                                                    <div class="col-12 d-flex flex-column">
                                                        <label for="" class=" form-label">Telefono</label>
                                                        <input type="number" class="w-100 form-check-input"
                                                            name="Telefono" value="{{ $item->telefono }}">
                                                    </div>

                                                    <div class="col-12 d-flex flex-column">
                                                        <label for="" class=" form-label">Direccion</label>
                                                        <input type="text" class="w-100 form-check-input"
                                                            name="Direccion" value="{{ $item->direccion }}">
                                                    </div>

                                                    <div class="col-12 d-flex flex-column">
                                                        <label for="" class=" form-label">Puesto
                                                            actual</label>
                                                        <input type="text" class="w-100 form-check-input"
                                                            name="" value="{{ $item->tipo_cargo }}">
                                                    </div>

                                                    <div class="col-12 d-flex flex-column">
                                                        <label for="" class=" form-label">Nuevo Puesto</label>
                                                        <select name="Puesto" id="">
                                                            <option value=""></option>
                                                            @foreach ($tipos_cargos as $item)
                                                                <option class=" text-black"
                                                                    value="{{ $item->id }}">
                                                                    {{ $item->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-dark">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
    <script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
