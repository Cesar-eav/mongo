@extends('layouts.app')

@section('content')
    <h1 class="text-center">Detalle del Arriendo</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Arriendo</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID Arriendo:</strong> {{ $arriendo->id_arriendo }}</li>
                <li class="list-group-item"><strong>Cliente:</strong> {{ $arriendo->cliente['nombre'] }} (ID: {{ $arriendo->cliente['id'] }})</li>
                <li class="list-group-item"><strong>Vehículo:</strong> {{ $arriendo->vehiculo['marca'] }} {{ $arriendo->vehiculo['modelo'] }} (ID: {{ $arriendo->vehiculo['id'] }})</li>
                <li class="list-group-item"><strong>Fecha Inicio:</strong> {{ $arriendo->fecha_inicio }}</li>
                <li class="list-group-item"><strong>Fecha Fin:</strong> {{ $arriendo->fecha_fin }}</li>
                <li class="list-group-item"><strong>Modalidad:</strong> {{ $arriendo->modalidad }}</li>
                <li class="list-group-item"><strong>Costo Total:</strong> {{ $arriendo->costo_total }}</li>
            </ul>
            <a href="{{ route('arriendos.index') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
        </div>
    </div>
@endsection