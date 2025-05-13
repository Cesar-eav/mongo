@extends('layouts.app')

@section('content')
    <h1 class="text-center">Listado de Arriendos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('arriendos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Arriendo</a>

     @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID Arriendo</th>
                    <th>Cliente</th>
                    <th>Vehículo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Modalidad</th>
                    <th>Costo Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if (isset($arriendos) && $arriendos->isEmpty())
                    <tr>
                        <td colspan="8" class="text-center">No hay arriendos registrados.</td>
                    </tr>
                @else
                    @foreach ($arriendos as $arriendo)
                        <tr>
                            <td>{{ $arriendo->id_arriendo }}</td>
                            <td>{{ $arriendo->cliente['nombre'] }} (ID: {{ $arriendo->cliente['id'] }})</td>
                            <td>{{ $arriendo->vehiculo['marca'] }} {{ $arriendo->vehiculo['modelo'] }} (ID: {{ $arriendo->vehiculo['id'] }})</td>
                            <td>{{ $arriendo->fecha_inicio }}</td>
                            <td>{{ $arriendo->fecha_fin }}</td>
                            <td>{{ $arriendo->modalidad }}</td>
                            <td>{{ $arriendo->costo_total }}</td>
                            <td>
                                <a href="{{ route('arriendos.show', $arriendo) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('arriendos.edit', $arriendo) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('arriendos.destroy', $arriendo) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este arriendo?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection
