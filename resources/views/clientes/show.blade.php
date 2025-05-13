@extends('layouts.app')

@section('content')
    <h1 class="text-center">Detalle del Cliente</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Información del Cliente</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> {{ $cliente->id }}</li>
                <li class="list-group-item"><strong>RUT:</strong> {{ $cliente->rut }}</li>
                <li class="list-group-item"><strong>Nombres:</strong> {{ $cliente->nombres }}</li>
                <li class="list-group-item"><strong>Apellidos:</strong> {{ $cliente->apellidos }}</li>
                <li class="list-group-item"><strong>Fecha de Nacimiento:</strong> {{ $cliente->fecha_nacimiento ? $cliente->fecha_nacimiento->format('Y-m-d') : 'N/A' }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Teléfono:</strong> {{ $cliente->telefono ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Dirección:</strong> {{ $cliente->direccion ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Comuna:</strong> {{ $cliente->comuna ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Ciudad:</strong> {{ $cliente->ciudad ?? 'N/A' }}</li>
                <li class="list-group-item"><strong>Licencia de Conducir:</strong> {{ $cliente->licencia_conducir }}</li>
                <li class="list-group-item"><strong>Vencimiento Licencia:</strong> {{ $cliente->fecha_vencimiento_licencia ? $cliente->fecha_vencimiento_licencia->format('Y-m-d') : 'N/A' }}</li>
            </ul>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver al Listado</a>
        </div>
    </div>
@endsection
