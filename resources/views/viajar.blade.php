@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
    <br>
    <br>
    <div class="d-flex align-items-center justify-content-center">
        <h1 class="animation-moveUp" style="font-size: 52px">{{ __('¡Reserva tu viaje!') }}</h1>
    </div>
    <div class="d-flex align-items-center justify-content-center my-3 animation-moveUp">
        <button class="btn btn-outline-info" onclick="window.location='{{ route('travels.nuevo') }}'">Reservar</button>
    </div>
    <br>
    <div class="row d-flex align-items-center justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Destino</th>
                    <th>Fecha de inicio</th>
                    <th>Fecha de fin</th>
                    <th>Precio</th>
                    <th>Descripción</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viajes as $viaje)
                    <tr>
                        <td>{{ $viaje->destino }}</td>
                        <td>{{ $viaje->fecha_inicio }}</td>
                        <td>{{ $viaje->fecha_fin }}</td>
                        <td>{{ $viaje->precio }}</td>
                        <td>{{ Str::limit($viaje->descripcion, 15) }}</td>
                        <td>
                            <a href="{{ route('travels.editar', ['id' => $viaje->id]) }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Editar</a>
                            <a href="{{ route('travels.eliminar', ['viaje' => $viaje->id]) }}" class="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover mx-3" onclick="event.preventDefault(); if(confirm('¿Estás seguro de que deseas eliminar este registro?')) { document.getElementById('eliminar-viaje-{{ $viaje->id }}').submit(); }">Eliminar</a>
                            <form action="{{ route('travels.eliminar', ['viaje' => $viaje->id]) }}" method="POST" id="eliminar-viaje-{{ $viaje->id }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
