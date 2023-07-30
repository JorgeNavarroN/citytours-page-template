@extends('layouts.app')

@section('content')


<br>
<br>
<br>
<div class="container">
    <br>
    <br>
    @if (Auth::check())
    <div class="d-flex align-items-center justify-content-center">
        <h1 class="animation-moveUp" style="font-size: 52px">{{ __('Añade un lugar') }}</h1>
    </div>
    <div class="d-flex align-items-center justify-content-center my-3 animation-moveUp">
        <button class="btn btn-outline-info" onclick="window.location='{{ route('tourist-spots.nuevo') }}'">Añadir</button>
    </div>
    @else

    @endif
    <div class="row d-flex align-items-center justify-content-center">
        @foreach($lugares as $index => $lugar)
            @if($index % 3 == 0)
                </div><br><br><br><div class="row">
            @endif
            <div class="col-md-4">
                <div class="animation-appear shadow-sm card mb-3 d-flex flex-column" style="width: 250px; height: 400px;">
                    <img class="card-img-top" src="{{ asset('../storage/app/' . $lugar->imagen_lugar) }}" alt="{{ $lugar->nombre_lugar }}" style="width: auto; height: 200px;">
                    <div class="card-body">
                        <h5 style="font-weight: bold;" class="card-title">{{ $lugar->nombre_lugar }}</h5>
                        <p class="card-text" style="height: 80px;">{{ Str::limit($lugar->reseña_historica, 150) }}</p>
                        <br>
                        <br>
                        <br>
                        <a href="{{ route('tourist-spots.mostrar', $lugar->id) }}" class="btn btn-outline-dark">Ver detalles</a>
                        <a href="{{ route('viajar') }}" class="btn btn-outline-secondary mx-3">Viajar</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <br>
</div>

@endsection
