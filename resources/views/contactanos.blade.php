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
                        <h3>Contactanos</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="mensaje">Mensaje:</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                            </div>
                            <br>
                            <div id="mensaje-enviado" style="display: none;">
                                <p>Tu mensaje ha sido enviado con éxito.</p>
                            </div>
                            <!-- Este boton solo simula el envio de un mensaje -->
                            <button onclick="mostrarMensajeEnviado()" type="button" class="btn btn-primary">Enviar mensaje</button>
                            <script>
                                function mostrarMensajeEnviado() {
                                    var nombre = document.getElementById('nombre').value;
                                    var email = document.getElementById('email').value;
                                    var mensaje = document.getElementById('mensaje').value;

                                    if (nombre && email && mensaje) {
                                        alert("Mensaje enviado");
                                        window.location.href='/actividad-entregable-app/public';
                                    } else {
                                        alert("Por favor, completa todos los campos");
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
