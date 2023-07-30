<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use App\Models\Lugar;
use Illuminate\Http\Request;

class ViajarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->guest()) {
            return redirect()->route('login');
        }
        $user = auth()->user();
        $viajes = Viaje::where('user_id', $user->id)->get();
        return view('viajar', compact('viajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viajes = Viaje::all();
        $lugares = Lugar::all();
        return view('travels.nuevo', compact('lugares', 'viajes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'destino' => 'required|string|max:255',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
            'precio' => 'required|numeric',
            'descripcion' => 'required|string',
        ]);

        $viaje = new Viaje([
            'destino' => $request->input('destino'),
            'fecha_inicio' => $request->input('fecha_inicio'),
            'fecha_fin' => $request->input('fecha_fin'),
            'precio' => $request->input('precio'),
            'descripcion' => $request->input('descripcion'),
        ]);

        $viaje->user_id = auth()->id();
        $viaje->save();

        return redirect()->route('viajar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viajes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Viaje $viajes)
    {
        $viaje = Viaje::findOrFail($id);
        return view('travels.editar', compact('viaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $viajes)
    {
        $viaje = Viaje::findOrFail($viajes);
        $viaje->destino = $request->destino;
        $viaje->fecha_inicio = $request->fecha_inicio;
        $viaje->fecha_fin = $request->fecha_fin;
        $viaje->precio = $request->precio;
        $viaje->descripcion = $request->descripcion;
        $viaje->save();

        return redirect()->route('viajar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Viaje::destroy($id);
        return redirect()->route('viajar')->with('mensaje', 'Viaje eliminado correctamente.');
    }
}
