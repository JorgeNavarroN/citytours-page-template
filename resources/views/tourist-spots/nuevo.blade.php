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
                    <h3>Nuevo Lugar</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('tourist-spots.nuevo') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre_lugar" class="form-label">Nombre del lugar</label>
                            <input type="text" class="form-control" id="nombre_lugar" name="nombre_lugar" placeholder="Ej: Machu Picchu" required>
                        </div>

                        <div class="mb-3">
                            <label for="reseña_historica" class="form-label">Reseña histórica</label>
                            <textarea class="form-control" id="reseña_historica" name="reseña_historica" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="imagen_lugar" class="form-label">Imagen del lugar</label>
                            <input type="file" class="form-control-file" id="imagen_lugar" name="imagen_lugar" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="button" class="btn btn-danger mx-3" onclick="window.location='{{ route('lugares') }}'">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
