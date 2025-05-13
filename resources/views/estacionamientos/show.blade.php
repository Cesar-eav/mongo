@extends('layouts.app')

@section('content')
    <h1 class="text-center">Detalle del Estacionamiento</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Estacionamiento</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{ $estacionamiento->id }}</li>
                <li class="list-group-item"><strong>Nombre:</strong> {{ $estacionamiento->nombre }}</li>
                <li class="list-group-item"><strong>Ciudad:</strong> {{ $estacionamiento->ciudad }}</li>
                <li class="list-group-item"><strong>Dirección:</strong> {{ $estacionamiento->direccion }}</li>
                <li class="list-group-item"><strong>Latitud:</strong> {{ $estacionamiento->coordenadas['lat'] }}</li>
                 <li class="list-group-item"><strong>Longitud:</strong> {{ $estacionamiento->coordenadas['lng'] }}</li>
                <li class="list-group-item"><strong>Capacidad:</strong> {{ $estacionamiento->capacidad }}</li>
                <li class="list-group-item"><strong>Disponibles:</strong> {{ $estacionamiento->disponibles }}</li>
            </ul>
            <a href="{{ route('estacionamientos.index') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
        </div>
    </div>
@endsection