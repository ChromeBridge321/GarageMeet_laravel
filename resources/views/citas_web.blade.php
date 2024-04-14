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



</body>

<script src="{{ asset('CSS/Bootstrap/js/script.js') }}"></script>
<script src="{{ asset('CSS/Bootstrap/js/bootstrap.min.js') }}"></script>

</html>
