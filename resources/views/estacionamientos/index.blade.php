@extends('layouts.app')

@section('content')
    <h1 class="text-center">Listado de Estacionamientos</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('estacionamientos.create') }}" class="btn btn-primary mb-3">Ingresar Nuevo Estacionamiento</a>

    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ciudad</th>
                    <th>Dirección</th>
                    <th>Latitud</th>
                    <th>Longitud</th>
                    <th>Capacidad</th>
                    <th>Disponibles</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @if ($estacionamientos->isEmpty())
                    <tr>
                        <td colspan="9" class="text-center">No hay estacionamientos registrados.</td>
                    </tr>
                @else
                    @foreach ($estacionamientos as $estacionamiento)
                        <tr>
                            <td>{{ $estacionamiento->id }}</td>
                            <td>{{ $estacionamiento->nombre }}</td>
                            <td>{{ $estacionamiento->ciudad }}</td>
                            <td>{{ $estacionamiento->direccion }}</td>
                            <td>{{ $estacionamiento->coordenadas['lat'] }}</td>
                            <td>{{ $estacionamiento->coordenadas['lng'] }}</td>
                            <td>{{ $estacionamiento->capacidad }}</td>
                            <td>{{ $estacionamiento->disponibles }}</td>
                            <td>
                                <a href="{{ route('estacionamientos.show', $estacionamiento) }}" class="btn btn-sm btn-info">Ver</a>
                                <a href="{{ route('estacionamientos.edit', $estacionamiento) }}" class="btn btn-sm btn-primary">Editar</a>
                                <form action="{{ route('estacionamientos.destroy', $estacionamiento) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este estacionamiento?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection