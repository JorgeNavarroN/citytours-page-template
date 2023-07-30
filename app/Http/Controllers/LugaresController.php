<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugaresController extends Controller
{
    public function index()
    {
        $lugares = Lugar::all();
        return view('lugares', compact('lugares'));
    }

    public function create()
    {
        $lugares = Lugar::all();
        return view('tourist-spots.nuevo', ['lugares' => $lugares]);
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_lugar' => 'required|max:255',
            'reseña_historica' => 'required',
            'imagen_lugar' => 'required|image',
        ]);

        // Obtener la imagen subida
        $imagen_lugar = $request->file('imagen_lugar');

        // Guardar la imagen en el servidor
        $ruta_imagen = $imagen_lugar->store('public/images/images-saved');

        // Crear un nuevo lugar en la base de datos
        $lugar = new Lugar;
        $lugar->nombre_lugar = $request->input('nombre_lugar');
        $lugar->reseña_historica = $request->input('reseña_historica');
        $lugar->imagen_lugar = $ruta_imagen;
        $lugar->save();

        // Redirigir a la lista de lugares
        return redirect()->route('lugares');
    }

    public function show($id)
    {
        $lugar = Lugar::find($id);
        return view('tourist-spots.mostrar', ['lugar' => $lugar]);
    }

    public function edit($id)
    {
        // Mostrar el formulario para editar un lugar específico
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar el lugar en la base de datos
    }

    public function destroy($id)
    {
        // Eliminar un lugar específico de la base de datos
    }
}
