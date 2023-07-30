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
                    <h3>Edita tu viaje</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('travels.actualizar', ['viajes' => $viaje->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="destino" class="form-label">Destino</label>
                            <input type="text" class="form-control" id="destino" name="destino" required value="{{ $viaje->destino }}">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha de inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required value="{{ $viaje->fecha_inicio }}">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_fin" class="form-label">Fecha de fin</label>
                            <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required value="{{ $viaje->fecha_fin }}">
                        </div>
                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" required value="{{ $viaje->precio }}">
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $viaje->descripcion }}</textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Editar viaje</button>
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
