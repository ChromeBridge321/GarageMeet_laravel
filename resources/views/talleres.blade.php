<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('CSS/Bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('CSS/index.css')}}">
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
                <div class="col-12 col-sm-12  col-lg-4 logo col-xl-6">
                    <h1>GarageMet</h1>
                </div>

                <div class="col-12 col-sm-12 col-lg-8 col-xl-6">
                    <div class="row underline-hover">
                        <div class="col-12 col-sm col-md d-flex align-items-center justify-content-center links"><a
                                class="underline-hover" href="find.html"></a></div>
                        <div class="col-12 col-sm col-md d-flex align-items-center justify-content-center links"><a
                                class="underline-hover" href="index.html#Nosotros"></a></div>
                        <div class="col-12 col-sm col-md d-flex align-items-center justify-content-center links"><a
                                class="underline-hover" href="index.html#Planes"></a></div>
                        <div class="col-12 col-sm col-md d-flex align-items-center justify-content-end links">
                            @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" >Home</a>
                            @else
                                <a href="{{ route('login') }}">Log in</a>
        
                                
                            @endauth
                    @endif  
                        </div>
                        <div class="col-12 col-sm col-md d-flex align-items-center justify-content-center links"><a
                                class="" href="index.html#nav"><svg xmlns="http://www.w3.org/2000/svg" width="52"
                                    height="52" fill="#ffffff" viewBox="0 0 256 256">
                                    <path
                                        d="M172,120a44,44,0,1,1-44-44A44.05,44.05,0,0,1,172,120Zm60,8A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88.09,88.09,0,0,0-91.47-87.93C77.43,41.89,39.87,81.12,40,128.25a87.65,87.65,0,0,0,22.24,58.16A79.71,79.71,0,0,1,84,165.1a4,4,0,0,1,4.83.32,59.83,59.83,0,0,0,78.28,0,4,4,0,0,1,4.83-.32,79.71,79.71,0,0,1,21.79,21.31A87.62,87.62,0,0,0,216,128Z">
                                    </path>
                                </svg></a></div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="row buscar ">
            <div
                class="col-12 col-md-12 col-lg-6 d-flex justify-content-center align-items-center text-center gris pb-5">
                <h1 class="titulo">LOCALIZA TU TALLER MECANICO</h1>
            </div>

            <div
                class=" col-12 col-md col-lg datos gris d-flex flex-column w-100 justify-content-center align-items-center pb-5 text-center">
                <h3>Busca por estado o municipio</h3>
                <input type="text">
            </div>

            <div class="col-12 col-md-6 col-lg-2 d-flex justify-content-center align-items-center boton gris pt-5 pb-5">
                <a href="citas.html" class="btn boton2"> <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                        fill="#fcfcfc" viewBox="0 0 256 256">
                        <path
                            d="M232,120h-8.34A96.14,96.14,0,0,0,136,32.34V24a8,8,0,0,0-16,0v8.34A96.14,96.14,0,0,0,32.34,120H24a8,8,0,0,0,0,16h8.34A96.14,96.14,0,0,0,120,223.66V232a8,8,0,0,0,16,0v-8.34A96.14,96.14,0,0,0,223.66,136H232a8,8,0,0,0,0-16Zm-96,87.6V200a8,8,0,0,0-16,0v7.6A80.15,80.15,0,0,1,48.4,136H56a8,8,0,0,0,0-16H48.4A80.15,80.15,0,0,1,120,48.4V56a8,8,0,0,0,16,0V48.4A80.15,80.15,0,0,1,207.6,120H200a8,8,0,0,0,0,16h7.6A80.15,80.15,0,0,1,136,207.6ZM128,88a40,40,0,1,0,40,40A40,40,0,0,0,128,88Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,152Z">
                        </path>
                    </svg></a>
            </div>
        </div>
    </div>

</body>
<script src="js/bootstrap.bundle.min.js"></script>

</html>