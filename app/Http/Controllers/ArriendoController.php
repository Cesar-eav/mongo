<?php

namespace App\Http\Controllers;

use App\Models\Arriendo;
use Illuminate\Http\Request;
use MongoDB\Laravel\Eloquent\Model; 

class ArriendoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arriendos = Arriendo::all();
        return view('arriendos.index', compact('arriendos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = \App\Models\Cliente::all();
        $vehiculos = \App\Models\Vehiculo::all();
        return view('arriendos.create', compact('clientes', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_arriendo' => 'required|integer|unique:arriendos,id_arriendo',
            'id_cliente' => 'required|string',
            'id_vehiculo' => 'required|string',
            'fecha_inicio' => 'required|date|before:fecha_fin',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'modalidad' => 'required|string|in:dia,hora',
            'costo_total' => 'required|numeric|min:0',
        ]);

        $cliente = \App\Models\Cliente::find($request->id_cliente);
        $vehiculo = \App\Models\Vehiculo::find($request->id_vehiculo);

        if (!$cliente || !$vehiculo) {
            return redirect()->back()->withErrors(['error' => 'Cliente o vehículo no encontrado.']);
        }

        $arriendoData = $request->all();
        $arriendoData['cliente'] = [
            'id' => $cliente->id,
            'nombre' => $cliente->nombres . ' ' . $cliente->apellidos,
            'correo' => $cliente->email,
        ];
        $arriendoData['vehiculo'] = [
            'id' => $vehiculo->id,
            'marca' => $vehiculo->marca,
            'modelo' => $vehiculo->modelo,
            'tipo' => $vehiculo->tipo,
        ];

        Arriendo::create($arriendoData);

        return redirect()->route('arriendos.index')->with('success', 'Arriendo creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Arriendo $arriendo)
    {
        return view('arriendos.show', compact('arriendo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arriendo $arriendo)
    {
        $clientes = \App\Models\Cliente::all();
        $vehiculos = \App\Models\Vehiculo::all();
        return view('arriendos.edit', compact('arriendo', 'clientes', 'vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arriendo $arriendo)
    {
        $request->validate([
            'id_arriendo' => 'required|integer|unique:arriendos,id_arriendo,' . $arriendo->id . ',_id',
            'id_cliente' => 'required|string',
            'id_vehiculo' => 'required|string',
            'fecha_inicio' => 'required|date|before:fecha_fin',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'modalidad' => 'required|string|in:dia,hora',
            'costo_total' => 'required|numeric|min:0',
        ]);

        $cliente = \App\Models\Cliente::find($request->id_cliente);
        $vehiculo = \App\Models\Vehiculo::find($request->id_vehiculo);

        if (!$cliente || !$vehiculo) {
            return redirect()->back()->withErrors(['error' => 'Cliente o vehículo no encontrado.']);
        }

        $arriendoData = $request->all();
        $arriendoData['cliente'] = [
            'id' => $cliente->id,
            'nombre' => $cliente->nombres . ' ' . $cliente->apellidos,
            'correo' => $cliente->email,
        ];
        $arriendoData['vehiculo'] = [
            'id' => $vehiculo->id,
            'marca' => $vehiculo->marca,
            'modelo' => $vehiculo->modelo,
            'tipo' => $vehiculo->tipo,
        ];

        $arriendo->update($arriendoData);

        return redirect()->route('arriendos.index')->with('success', 'Arriendo actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arriendo $arriendo)
    {
        $arriendo->delete();
        return redirect()->route('arriendos.index')->with('success', 'Arriendo eliminado exitosamente.');
    }

    public function buscar(Request $request)
    {
        $request->validate([
            'id_arriendo' => 'sometimes|integer',
            'nombre_cliente' => 'sometimes|string',
        ]);

        $arriendos = Arriendo::query();

        if ($request->has('id_arriendo')) {
            $arriendos->where('id_arriendo', $request->id_arriendo);
        }

        if ($request->has('nombre_cliente')) {
            $nombre_cliente = $request->nombre_cliente;
            $arriendos->where('cliente.nombre', 'REGEXP', new \MongoDB\BSON\Regex($nombre_cliente, 'i'));
        }

        $arriendos = $arriendos->get();


        if ($arriendos->isEmpty()) {
            return view('arriendos.index')->with('error', 'No se encontraron arriendos con los criterios proporcionados.');
        }

        return view('arriendos.index', compact('arriendos'));
    }
}

