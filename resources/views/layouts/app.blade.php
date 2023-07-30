<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CityTours') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body">
    @if (Auth::check())
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="transicion mx-5" style="font-size: 32px;" href="{{ route('tourist-spots.index') }}">CityTours</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('tourist-spots.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('lugares') }}">Lugares</a>
                    </li>
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('viajar') }}">Viajar</a>
                    </li>
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('contactanos') }}">Contactanos</a>
                    </li>
                </ul>
                <p class="text-white mx-3 my-2" style="font-size: 18px;">Bienvenido {{ Auth::user()->name }}</p>
                <button type="button" class="btn btn-outline-danger" onclick="window.location='{{ route('logout') }}'">Cerrar Sesion</button>
            </div>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="transicion mx-5" style="font-size: 32px;" href="{{ route('tourist-spots.index') }}">CityTours</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('tourist-spots.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('lugares') }}">Lugares</a>
                    </li>
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('login') }}">Viajar</a>
                    </li>
                    <li class="nav-item transicion">
                        <a class="nav-link mx-4 text-white" style="font-size: 18px" href="{{ route('contactanos') }}">Contactanos</a>
                    </li>
                </ul>
                <div class="btn-group mx-5">
                    <button type="button" class="btn btn-outline-success" onclick="window.location='{{ route('login') }}'">Iniciar Sesion</button>
                    <button type="button" class="btn btn-outline-secondary" onclick="window.location='{{ route('register') }}'">Registrarse</button>
                </div>
            </div>
        </div>
    </nav>
    @endif
    <br>
    <br>
    @yield('content')
    <br>
    <br>
    <footer class="bg-dark text-white py-3 footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="animation-appear mx-5">Todos los derechos reservados &copy; 2023</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="animation-appear mx-5">
                        Designed by
                        <a class="my-link-light" href="https://github.com/JorgeNavarroN" target="_blank">Jorge Navarro</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


</body>
