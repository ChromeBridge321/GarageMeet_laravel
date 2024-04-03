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
        <div class="row" id="nav">
            <nav class="nav " id="nav">
                <div class="col-6 col-sm-6 col-md-4 col-lg-6 logo col-xl-7">
                    <h1>GarageMet</h1>
                </div>

                <div class=" col-6 col-sm-6 col-md-8 col-lg-6 col-xl-5 row">
                        <div class="col-12 col-sm col-md links d-none d-md-block">
                            <a class="underline-hover d-flex align-items-center justify-content-center" href="{{ route('talleres') }}">Talleres</a></div>


                            <div
                                class="col-12 col-sm col-md links d-none d-md-block">
                                <a class="underline-hover d-flex align-items-center justify-content-center" href="#Nosotros">Nosotros</a></div>


                            <div
                                class="col-12 col-sm col-md links d-none d-md-block">
                                <a class="underline-hover d-flex align-items-center justify-content-center" href="#Planes">Planes</a></div>



                            <div
                                class="col-12 col-sm col-md  links d-none d-md-block">
                                @if (Route::has('login'))
                                    @auth
                                        <a href="{{ url('/home') }}" class="d-flex align-items-center justify-content-center">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="d-flex align-items-center justify-content-center">Log in</a>


                                    @endauth
                                @endif
                            </div>


                            <div class="col-12 col-sm col-md links d-none d-md-block">
                                <a href="{{ route('garegemet') }}" class="d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('images/yasuo.jpg') }}" alt=""
                                        class=" avatar rounded-circle">
                                </a>
                            </div>

                            <div class="col-12 pe-5 d-md-none d-flex justify-content-end">
                                <a class="d-flex align-items-center justify-content-end" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <img src="{{asset("images/bars.svg")}}" alt="">
                                </a>
                            </div>
                        </div>
                </div>
            </nav>
        </div>

        <div class=" collapse w-100 position-fixed col-12 bg-black pt-5 mt-5" id="collapseExample">
            <div class="card w-100 bg-black border-0">
                <div class="col-sm-12 d-flex align-items-center justify-content-center links pt-5">
                    <a class="underline-hover" href="{{ route('talleres') }}">Talleres</a></div>


                    <div
                        class="col-sm-12 col-md d-flex align-items-center justify-content-center links">
                        <a class="underline-hover" href="#Nosotros">Nosotros</a></div>


                    <div
                        class="col-sm-12 col-md d-flex align-items-center justify-content-center links">
                        <a class="underline-hover" href="#Planes">Planes</a></div>



                    <div
                        class="col-sm-12 d-flex align-items-center justify-content-center links">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="{{ route('login') }}">Iniciar sesion</a>


                            @endauth
                        @endif
                    </div>


                    <div class="col-sm-12 d-flex align-items-center justify-content-center links pb-5">
                        <a href="{{ route('garegemet') }}">
                            <img src="{{ asset('images/yasuo.jpg') }}" alt=""
                                class=" avatar rounded-circle">
                        </a>
                    </div>
            </div>
          </div>


        
          <div class="row">
            <div class="col imgpstc"></div>
        </div>
        
        <div class="row acercade" id="Nosotros">
            <div class="col-12 col-xl-4 p-5 pt-0 pb-0">
                <h3>Nostros</h3>
                <p>En GarageMet, estamos dedicados a simplificar la gestión de talleres mecánicos mediante soluciones
                    tecnológicas innovadoras. Nuestro equipo combina experiencia en desarrollo web y conocimientos en el
                    sector automotriz para ofrecer una plataforma integral y confiable. Nos esforzamos por impulsar la
                    eficiencia y el éxito de nuestros usuarios, promoviendo la transparencia y la excelencia en la
                    industria automotriz. ¡Únete a nosotros y simplifica tu negocio con GarageMet!</p>
            </div>

            <div class="col-12 col-xl-4 p-5 pt-0 pb-0">
                <h3>Vision</h3>
                <p>Nuestra misión en GarageMet es proporcionar una plataforma digital innovadora y confiable que
                    transforme la manera en que se gestionan los talleres mecánicos. Nos comprometemos a ofrecer
                    herramientas intuitivas y eficientes que simplifiquen las operaciones diarias de los talleres,
                    optimicen la experiencia del cliente y fomenten el crecimiento y la excelencia en el sector
                    automotriz.</p>
            </div>

            <div class="col-12 col-xl-4 p-5 pt-0 pb-0">
                <h3>Mision</h3>
                <p>En GarageMet, visualizamos un futuro donde la gestión de talleres mecánicos sea sinónimo de
                    eficiencia, transparencia y excelencia. Nos esforzamos por ser líderes en la innovación tecnológica,
                    proporcionando constantemente soluciones avanzadas que impulsen el éxito y la rentabilidad de
                    nuestros usuarios. Aspiramos a ser la plataforma de referencia a nivel mundial para la gestión
                    integral de talleres mecánicos, contribuyendo así al progreso y la profesionalización de la
                    industria automotriz.</p>
            </div>
        </div>


        <div class="gestion row">
            <div class="col-12 col-lg-6 d-flex justify-content-center flex-column p-5 pt-0 pb-0">
                <h2>SOFTWARE DE GESTION PARA TALLERES MECANICOS</h2>
                <h3>Que tu taller hable por ti</h3>
                <p>Software basado en la nube para talleres mecánicos que te ayudara a optimizar la eficiencia de tu
                    taller
                    y darle la mejor atencion a tus clientes, es facil de usar e intuitivo.</p>
            </div>
            <div class="col-12 col-lg-6 justify-content-center align-items-center d-flex">
                <img src="{{ asset('images/img2.jpg') }}" alt="" class="img-fluid p-5 pt-0 pb-5">
            </div>
        </div>


        <div class="productividad row">
            <div class="col-12 col-lg-6 justify-content-center align-items-center d-flex">
                <img src="{{ asset('images/productividad.jpg') }}" alt="" class="img-fluid p-5 pt-0 pb-0">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center flex-column p-5 pt-0 pb-0">
                <h2 class="pb-2 pt-5">AUMENTA TU PRODUCTIVIDAD Y LA DE TU EQUIPO</h2>
                <p>No crees que ¿las actividades que ya realizan tu y tu equipo consumen mucho tiempo?, que tal si te
                    ahorras el tiempo que gastas administrando en papel tus ventas y citas y lo inviertes en mejorar la
                    experiencia de tus clientes gracias a nuestra tecnologia.</p>
                <ul>
                    <li>Citas en linea</li>
                    <li>Seguimientos de citas</li>
                    <li>Pagos desde la web</li>
                </ul>
            </div>

        </div>


        <div class="reportes row">
            <div class="col-12 col-lg-6 d-flex justify-content-center flex-column p-5 pt-0 pb-0">
                <h2 class="pb-2 pt-5">OBTEN REPORTES DE TU NEGOCIO</h2>
                <p>Dicen que nadie conoce mejor su negocio que su propietario, pero, ¿tu conoces bien el tuyo?, que tal
                    si te damos una mano para conocer mejor tu negocio</p>
                <ul>
                    <li>Reportes de ventas del dia</li>
                    <li>Reporte de utilidad</li>
                    <li>Historial de reparaciones</li>
                    <li>Rendimiento de tu negocio</li>
                </ul>
            </div>

            <div class="col-12 col-lg-6 justify-content-center align-items-center d-flex p-5 pt-0 pb-0">
                <img src="{{ asset('images/reportes.jpg') }}" alt="" class="img-fluid p-5 pt-0 pb-0">
            </div>
        </div>


        <div class="escapar row">
            <div class="col-12 col-lg-6 justify-content-center align-items-center d-flex p-5 pt-0 pb-0">
                <img src="{{ asset('images/escapar.jpg') }}" alt="" class="img-fluid img-fluid p-5 pt-0 pb-0">
            </div>

            <div class="col-12 col-lg-6 d-flex justify-content-center flex-column p-5 pt-0 pb-0">
                <h2 class="pb-2 pt-5">QUE NADA SE TE ESCAPE</h2>
                <p>Creemos que a cualquiera se le puede olvidar algo sin importar lo importante que sea, asi que mejor
                    no
                    dejemos eso a la suerte. lleva el control y seguimento de tus reparaciones en proceso y las que ya
                    han
                    concluido.</p>

                <p class="fst-italic display-3 pt-5 fw-normal">"Encuentra la excelencia en cada reparación, una vuelta a
                    la vez"</p>
            </div>



        </div>

        <div class="row" id="Planes">
            <div class="col-12">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <h1 class="h1">Nuestros Planes</h1>
                    </div>
                </div>


                <div class="row d-flex justify-content-between align-content-center">
                    <div class="col-12 col-sm-12 col-md-12 "></div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card d-flex justify-content-center align-items-center mb-5">
                            <div class="card-header w-100">
                                <h2>Plan base</h2>
                                <p>Incluye los siguientes beneficio</p>

                            </div>
                            <div class="card-body d-flex flex-column w-100 justify-content-center align-items-center">
                                <h1 class="card-title"> $540 MXN <small class="text-body-secondary">/mes</small></h1>

                                <button type="button" class="mb-5 btn btn-secondary">
                                    <h2>Probar</h2>
                                </button>
                                <ul>
                                    <li>Seguimientos de cita</li>
                                    <li>Reportes de ventas</li>
                                    <li>Reportes de utilidad</li>
                                    <li>Reparaciones mas solicitadas</li>
                                    <li>Rendimiento de negocio</li>
                                    <br>
                                    <br>
                                    <br>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center">
                        <div class="card d-flex justify-content-center align-items-center mb-5">
                            <div class="card-header w-100">
                                <h2>Plan plus +</h2>
                                <p>Incluye todos los beneficios ya mencionados y mas</p>
                            </div>
                            <div class="card-body d-flex flex-column w-100 justify-content-center align-items-center">
                                <h1 class="card-title"> $540 MXN <small class="text-body-secondary">/mes</small></h1>

                                <button type="button" class="mb-5 btn btn-secondary">
                                    <h2>Probar</h2>
                                </button>
                                <ul>
                                    <li>Citas en linea</li>
                                    <li>Apartado web propio</li>
                                    <li>Seguimientos de cita</li>
                                    <li>Pagos con tarjeta desde la web</li>
                                    <li>Reportes de ventas</li>
                                    <li>Reportes de utilidad</li>
                                    <li>Reparaciones mas solicitadas</li>
                                    <li>Rendimiento de negocio</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12"></div>
                </div>
            </div>
        </div>




        <footer class="row">
            <h3>Todos los derechos reverdados @DGcreations</h3>
        </footer>
    </div>

</body>
<script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
<script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>

</html>
