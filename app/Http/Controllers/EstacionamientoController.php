<?php
namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use Illuminate\Http\Request;

class EstacionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estacionamientos = Estacionamiento::all();
        return view('estacionamientos.index', compact('estacionamientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estacionamientos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:estacionamientos,nombre',
            'ciudad' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'coordenadas.lat' => 'required|numeric',
            'coordenadas.lng' => 'required|numeric',
            'capacidad' => 'required|integer|min:1',
            'disponibles' => 'required|integer|min:0',
        ]);

        Estacionamiento::create($request->all());
        return redirect()->route('estacionamientos.index')->with('success', 'Estacionamiento creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estacionamiento $estacionamiento)
    {
        return view('estacionamientos.show', compact('estacionamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Estacionamiento $estacionamiento)
    {
        return view('estacionamientos.edit', compact('estacionamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estacionamiento $estacionamiento)
    {
        // $request->validate([
        //     'nombre' => 'required|string|max:255|unique:estacionamientos,nombre,' . $estacionamiento->id . ',_id',
        //     'ciudad' => 'required|string|max:255',
        //     'direccion' => 'required|string|max:255',
        //      'coordenadas.lat' => 'required|numeric',
        //     'coordenadas.lng' => 'required|numeric',
        //     'capacidad' => 'required|integer|min:1',
        //     'disponibles' => 'required|integer|min:0',
        // ]);

        $estacionamiento->update($request->all());
        return redirect()->route('estacionamientos.index')->with('success', 'Estacionamiento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estacionamiento $estacionamiento)
    {
        $estacionamiento->delete();
        return redirect()->route('estacionamientos.index')->with('success', 'Estacionamiento eliminado exitosamente.');
    }
}