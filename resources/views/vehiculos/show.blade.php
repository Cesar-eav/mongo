// Vistas: resources/views/vehiculos/show.blade.php
@extends('layouts.app')

@section('content')
    <h1 class="text-center">Detalle del Vehículo</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Vehículo</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{ $vehiculo->id }}</li>
                <li class="list-group-item"><strong>Tipo:</strong> {{ $vehiculo->tipo }}</li>
                <li class="list-group-item"><strong>Marca:</strong> {{ $vehiculo->marca }}</li>
                <li class="list-group-item"><strong>Modelo:</strong> {{ $vehiculo->modelo }}</li>
                <li class="list-group-item"><strong>Patente:</strong> {{ $vehiculo->patente }}</li>
                <li class="list-group-item"><strong>Estado:</strong> {{ $vehiculo->estado }}</li>
                <li class="list-group-item"><strong>Ubicación:</strong> {{ $vehiculo->ubicacion ?? 'No especificada' }}</li>
            </ul>
            <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
        </div>
    </div>
@endsection