@extends('layouts.app')

@section('content')

<br>
<br>
<br>

<div class="container">
    <div class="row">
        <div class="animation-moveUp col-md-6">
            <img src="{{ asset('../storage/app/' . $lugar->imagen_lugar) }}" class="img-fluid mb-3 sombra">
        </div>
        <div class="col-md-6">
            <h1 class="animation-appear">{{ $lugar->nombre_lugar }}</h1>
            <p class="animation-appear">{{ $lugar->reseña_historica }}</p>
            <a href="{{ route('lugares') }}" class="btn btn-dark">Volver</a>
        </div>
    </div>
</div>

@endsection
