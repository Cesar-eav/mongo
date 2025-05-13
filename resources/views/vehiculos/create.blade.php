@extends('layouts.app')

@section('content')
    <h1 class="text-center">Ingresar Nuevo Vehículo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="tipo" class="col-md-4 col-form-label text-md-end">Tipo:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="tipo" id="tipo" value="{{ old('tipo') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="marca" class="col-md-4 col-form-label text-md-end">Marca:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="marca" id="marca" value="{{ old('marca') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="modelo" class="col-md-4 col-form-label text-md-end">Modelo:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="modelo" id="modelo" value="{{ old('modelo') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="patente" class="col-md-4 col-form-label text-md-end">Patente:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="patente" id="patente" value="{{ old('patente') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="estado" class="col-md-4 col-form-label text-md-end">Estado:</label>
            <div class="col-md-6">
                <select class="form-select" name="estado" id="estado">
                    <option value="disponible" {{ old('estado') == 'disponible' ? 'selected' : '' }}>Disponible</option>
                    <option value="arrendado" {{ old('estado') == 'arrendado' ? 'selected' : '' }}>Arrendado</option>
                    <option value="mantencion" {{ old('estado') == 'mantencion' ? 'selected' : '' }}>En Mantención</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ubicacion" class="col-md-4 col-form-label text-md-end">Ubicación:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="ubicacion" id="ubicacion" value="{{ old('ubicacion') }}">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('vehiculos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </form>
@endsection