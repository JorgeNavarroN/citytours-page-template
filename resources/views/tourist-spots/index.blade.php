@extends('layouts.app')

@section('content')

    <!-- imagen de fondo:
    <a href="https://www.freepik.com/free-photo/gray-abstract-wireframe-technology-background_15474085.htm#query=website%20background&position=20&from_view=keyword&track=ais">Image by rawpixel.com</a> on Freepik -->

    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="animation-moveUp" style="font-size: 72px">{{ __('Viajar nunca fue tan fácil') }}</h1>
                <div class="container py-3">
                    <p class="animation-appear" style="font-size: 25px;">
                        {{ __('Reserva tu viaje ') }}
                        <a class="my-link" href="#">Aquí</a>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row justify-content-center animation-moveUp">
            <div class="col-md-12">
                <div id="carouselExample" class="carousel slide animation-appear mx-auto" style="width: 622px; height: 400px;">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/to-carousel-images/arequipa-foto-corusel.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/to-carousel-images/cuzco-foto-corusel.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/to-carousel-images/ica-foto-corusel.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <div class="border-top"></div>

    <br>
    <br>
    <br>


    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h1 class="animation-moveUp" style="font-size: 42px">{{ __('Nosotros') }}</h1>
                <div class="container py-3">
                    <p class="animation-appear" style="font-size: 20px;">
                        {{ __('¡Bienvenidos a nuestra página web dedicada al turismo! Nos enorgullece presentar nuestro equipo de profesionales que trabaja incansablemente para brindarle las mejores experiencias de viaje.') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <img class="sombra animation-moveUp" src="{{ asset('images/paisaje-lima.jpg') }}" width="500px" height="300px">
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <img class="sombra animation-moveUp" src="{{ asset('images/viaje-inolvidable.jpg') }}" width="500px" height="300px">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <p class="animation-appear" style="font-size: 20px;">
                        {{ __('Somos una empresa con años de experiencia en la industria del turismo y nuestro principal objetivo es hacer que su viaje sea inolvidable. Contamos con un equipo altamente capacitado que le brindará el mejor asesoramiento y lo ayudará a diseñar el viaje de sus sueños.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <p class="animation-appear" style="font-size: 20px;">
                        {{ __('Nos especializamos en ofrecer paquetes de viaje personalizados y adaptados a las necesidades y gustos de cada cliente. Nos encargamos de todos los detalles para que usted solo tenga que preocuparse por disfrutar al máximo de su viaje.') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <img class="sombra animation-moveUp" src="{{ asset('images/paquetes-viaje-personalizado.jpg') }}" width="500px" height="300px">
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <img class="sombra animation-moveUp" src="{{ asset('images/avion-comercial.jpg') }}" width="500px" height="300px">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <p class="animation-appear" style="font-size: 20px;">
                        {{ __('Además, trabajamos con los mejores proveedores de servicios turísticos, lo que nos permite ofrecer una amplia variedad de destinos, actividades y opciones de alojamiento de alta calidad.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <p class="animation-appear" style="font-size: 20px;">
                        {{ __('En nuestra empresa encontrará un equipo de profesionales comprometidos en brindarle una experiencia de viaje única y personalizada. ¡No dude en contactarnos para planificar su próximo destino de vacaciones!') }}
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="{{ route('viajar') }}" class="btn btn-secondary animation-moveUp">¡Viajar!</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="container py-3">
                    <img class="sombra animation-moveUp" src="{{ asset('images/equipo-turistico.jpg') }}" width="500px" height="300px">
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>



@endsection
