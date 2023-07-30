@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card animation-appear">
                <div class="card-header">
                    <h3>Reserva tu viaje</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('travels.nuevo') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="destino" class="form-label">Destino</label>
                            <select class="form-select" aria-label="Destino" name="destino">
                                <option selected disabled>Selecciona un destino</option>
                                @foreach($lugares as $lugar)
                                    <option value="{{ $lugar->id }}">{{ $lugar->nombre_lugar }}</option>
                                @endforeach
                            </select>
                            {{-- <input type="text" class="form-control" id="destino" name="destino" required> --}}
                        </div>
                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_fin" class="form-label">Fecha de fin</label>
                            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Registrar viaje</button>
                        <button type="button" onclick="window.location='{{ route('viajar') }}'" class="btn btn-danger mx-3">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>

@endsection
