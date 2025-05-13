// Vistas: resources/views/vehiculos/index.blade.php
@extends('layouts.app')

@section('content')
    <h1 class="text-center">Listado de Vehículos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('vehiculos.create') }}" class="btn btn-primary mb-3">Ingresar Nuevo Vehículo</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Patente</th>
                    <th>Estado</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if ($vehiculos->isEmpty())
                    <tr>
                        <td colspan="8" class="text-center">No hay vehículos registrados.</td>
                    </tr>
                @else
                    @foreach ($vehiculos as $vehiculo)
                        <tr>
                            <td>{{ $vehiculo->id }}</td>
                            <td>{{ $vehiculo->tipo }}</td>
                            <td>{{ $vehiculo->marca }}</td>
                            <td>{{ $vehiculo->modelo }}</td>
                            <td>{{ $vehiculo->patente }}</td>
                            <td>{{ $vehiculo->estado }}</td>
                            <td>{{ $vehiculo->ubicacion }}</td>
                            <td>
                                <a href="{{ route('vehiculos.show', $vehiculo) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('vehiculos.edit', $vehiculo) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('vehiculos.destroy', $vehiculo) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este vehículo?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection