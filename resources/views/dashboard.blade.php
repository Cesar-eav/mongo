@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Panel de Administración</h1>
            <p>Bienvenido al panel de administración de RentValpoCar. Aquí podrás gestionar clientes, estacionamientos y vehículos.</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes</h5>
                    <p class="card-text">Administra la información de tus clientes.</p>
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Ver Clientes</a>
                    <a href="{{ route('clientes.create') }}" class="btn btn-success">Ingresar Cliente</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Estacionamientos</h5>
                    <p class="card-text">Gestiona tus ubicaciones de estacionamiento.</p>
                    <a href="{{ route('estacionamientos.index') }}" class="btn btn-primary">Ver Estacionamientos</a>
                    <a href="{{ route('estacionamientos.create') }}" class="btn btn-success">Ingresar Estacionamiento</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vehículos</h5>
                    <p class="card-text">Administra la flota de vehículos disponibles.</p>
                    <a href="{{ route('vehiculos.index') }}" class="btn btn-primary">Ver Vehículos</a>
                    <a href="{{ route('vehiculos.create') }}" class="btn btn-success">Ingresar Vehículo</a>
                </div>
            </div>
        </div>
    </div>
@endsection