<?php

namespace App\Http\Controllers;

use App\Models\Arriendo;
use Illuminate\Http\Request;

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
        // Aquí necesitarías obtener la lista de clientes y vehículos para los selects
        $clientes = \App\Models\Cliente::all()->toArray(); // Asegúrate de que el modelo Cliente existe
        $vehiculos = \App\Models\Vehiculo::all()->toArray(); // Asegúrate de que el modelo Vehiculo existe
        return view('arriendos.create', compact('clientes', 'vehiculos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_arriendo' => 'required|integer|unique:arriendos,id_arriendo',
            'id_cliente' => 'required|integer', // Solo necesitamos el ID, los datos completos los obtenemos aparte.
            'id_vehiculo' => 'required|integer', // Igual que con el cliente
            'fecha_inicio' => 'required|date|before:fecha_fin',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'modalidad' => 'required|string|in:dia,hora',
            'costo_total' => 'required|numeric|min:0',
        ]);

        // Obtener los datos del cliente y vehículo para almacenar en el documento de arriendo.
        $cliente = \App\Models\Cliente::find($request->id_cliente); //Cuidado con los namespaces
        $vehiculo = \App\Models\Vehiculo::find($request->id_vehiculo);

        if (!$cliente || !$vehiculo) {
            return redirect()->back()->withErrors(['error' => 'Cliente o vehículo no encontrado.']);
        }

        $arriendoData = $request->all();
        $arriendoData['cliente'] = [
            'id' => $cliente->id,
            'nombre' => $cliente->nombres . ' ' . $cliente->apellidos, // Ajusta según tus campos de nombre
            'correo' => $cliente->email, // Ajusta según tu campo de correo
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
        $clientes = \App\Models\Cliente::all()->toArray();
        $vehiculos = \App\Models\Vehiculo::all()->toArray();
        return view('arriendos.edit', compact('arriendo','clientes','vehiculos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arriendo $arriendo)
    {
        $request->validate([
            'id_arriendo' => 'required|integer|unique:arriendos,id_arriendo,' . $arriendo->id . ',_id',
            'id_cliente' => 'required|integer',
            'id_vehiculo' => 'required|integer',
            'fecha_inicio' => 'required|date|before:fecha_fin',
            'fecha_fin' => 'required|date|after:fecha_inicio',
            'modalidad' => 'required|string|in:dia,hora',
            'costo_total' => 'required|numeric|min:0',
        ]);
        // Obtener los datos del cliente y vehículo para almacenar en el documento de arriendo.
        $cliente = \App\Models\Cliente::find($request->id_cliente); //Cuidado con los namespaces
        $vehiculo = \App\Models\Vehiculo::find($request->id_vehiculo);

        if (!$cliente || !$vehiculo) {
            return redirect()->back()->withErrors(['error' => 'Cliente o vehículo no encontrado.']);
        }

        $arriendoData = $request->all();
        $arriendoData['cliente'] = [
            'id' => $cliente->id,
            'nombre' => $cliente->nombres . ' ' . $cliente->apellidos, // Ajusta según tus campos de nombre
            'correo' => $cliente->email, // Ajusta según tu campo de correo
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
}