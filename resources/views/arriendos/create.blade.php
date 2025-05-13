@extends('layouts.app')

@section('content')
    <h1 class="text-center">Crear Nuevo Arriendo</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('arriendos.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="id_arriendo" class="col-md-4 col-form-label text-md-end">ID Arriendo:</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="id_arriendo" id="id_arriendo" value="{{ old('id_arriendo') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_cliente" class="col-md-4 col-form-label text-md-end">Cliente:</label>
            <div class="col-md-6">
                <select class="form-select" name="id_cliente" id="id_cliente">
                    @foreach($clientes as $cliente)
                        <option value="{{$cliente['_id']}}">{{$cliente['nombres'] . ' ' . $cliente['apellidos']}}</option> {{-- Ajustar según los nombres --}}
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="id_vehiculo" class="col-md-4 col-form-label text-md-end">Vehículo:</label>
            <div class="col-md-6">
                 <select class="form-select" name="id_vehiculo" id="id_vehiculo">
                    @foreach($vehiculos as $vehiculo)
                        <option value="{{$vehiculo['_id']}}">{{$vehiculo['marca'] . ' ' . $vehiculo['modelo'] . ' (' . $vehiculo['tipo'] . ')'}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="fecha_inicio" class="col-md-4 col-form-label text-md-end">Fecha Inicio:</label>
            <div class="col-md-6">
                <input type="datetime-local" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{ old('fecha_inicio') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="fecha_fin" class="col-md-4 col-form-label text-md-end">Fecha Fin:</label>
            <div class="col-md-6">
                <input type="datetime-local" class="form-control" name="fecha_fin" id="fecha_fin" value="{{ old('fecha_fin') }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="modalidad" class="col-md-4 col-form-label text-md-end">Modalidad:</label>
            <div class="col-md-6">
                <select class="form-select" name="modalidad" id="modalidad">
                    <option value="dia" {{ old('modalidad') == 'dia' ? 'selected' : '' }}>Día</option>
                    <option value="hora" {{ old('modalidad') == 'hora' ? 'selected' : '' }}>Hora</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="costo_total" class="col-md-4 col-form-label text-md-end">Costo Total:</label>
            <div class="col-md-6">
                <input type="number" class="form-control" name="costo_total" id="costo_total" value="{{ old('costo_total') }}">
            </div>
        </div>
        <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('arriendos.index') }}" class="btn btn-secondary">Volver</a>
            </div>
        </div>
    </form>
@endsection