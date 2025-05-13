@extends('layouts.app')

@section('content')
    <h1 class="text-center">Crear Nuevo Cliente</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="rut" class="col-md-4 col-form-label text-md-end">RUT:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="rut" id="rut" value="{{ old('rut') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="nombres" class="col-md-4 col-form-label text-md-end">Nombres:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="nombres" id="nombres" value="{{ old('nombres') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="apellidos" class="col-md-4 col-form-label text-md-end">Apellidos:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ old('apellidos') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="fecha_nacimiento" class="col-md-4 col-form-label text-md-end">Fecha de Nacimiento:</label>
            <div class="col-md-6">
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">Email:</label>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="telefono" class="col-md-4 col-form-label text-md-end">Teléfono:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="telefono" id="telefono" value="{{ old('telefono') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="direccion" class="col-md-4 col-form-label text-md-end">Dirección:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="direccion" id="direccion" value="{{ old('direccion') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="comuna" class="col-md-4 col-form-label text-md-end">Comuna:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="comuna" id="comuna" value="{{ old('comuna') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="ciudad" class="col-md-4 col-form-label text-md-end">Ciudad:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="ciudad" id="ciudad" value="{{ old('ciudad') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="licencia_conducir" class="col-md-4 col-form-label text-md-end">Licencia de Conducir:</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="licencia_conducir" id="licencia_conducir" value="{{ old('licencia_conducir') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="fecha_vencimiento_licencia" class="col-md-4 col-form-label text-md-end">Vencimiento Licencia:</label>
            <div class="col-md-6">
                <input type="date" class="form-control" name="fecha_vencimiento_licencia" id="fecha_vencimiento_licencia" value="{{ old('fecha_vencimiento_licencia') }}">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </form>
@endsection
