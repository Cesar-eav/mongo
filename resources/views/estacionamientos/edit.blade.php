@extends('layouts.app')

@section('content')
    <h1 class="text-center">Editar Estacionamiento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('estacionamientos.update', $estacionamiento) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ old('nombre', $estacionamiento->nombre) }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ciudad" class="col-md-4 col-form-label text-md-end">Ciudad:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="ciudad" id="ciudad" value="{{ old('ciudad', $estacionamiento->ciudad) }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="direccion" class="col-md-4 col-form-label text-md-end">Dirección:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion', $estacionamiento->direccion) }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="coordenadas_lat" class="col-md-4 col-form-label text-md-end">Latitud:</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="coordenadas[lat]" id="coordenadas_lat" value="{{ old('coordenadas.lat', $estacionamiento->coordenadas['lat']) }}" step="any">
            </div>
        </div>
        <div class="row mb-3">
            <label for="coordenadas_lng" class="col-md-4 col-form-label text-md-end">Longitud:</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="coordenadas[lng]" id="coordenadas_lng" value="{{ old('coordenadas.lng', $estacionamiento->coordenadas['lng']) }}" step="any">
            </div>
        </div>
        <div class="row mb-3">
            <label for="capacidad" class="col-md-4 col-form-label text-md-end">Capacidad:</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="capacidad" id="capacidad" value="{{ old('capacidad', $estacionamiento->capacidad) }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="disponibles" class="col-md-4 col-form-label text-md-end">Disponibles:</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="disponibles" id="disponibles" value="{{ old('disponibles', $estacionamiento->disponibles) }}">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ route('estacionamientos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </form>
@endsection
