@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="jumbotron text-center bg-white rounded shadow-sm">
                    <h1 class="display-4 text-primary">RentValpoCar</h1>
                    <p class="lead text-secondary">
                        Proyecto para el ramo Bases de Datos No Relacionales - Instituto INACAP
                    </p>
                    <hr class="my-4">
                    <div class="text-left">
                        <h2 class="text-dark">Integrantes:</h2>
                        <ul class="list-unstyled">
                            <li>Nombre Alumno 1</li>
                            <li>Nombre Alumno 2</li>
                            </ul>
                    </div>

                    <div class="mt-4">
                        <h2>Buscar Arriendos por RUT de Cliente</h2>
                        <form action="{{ route('arriendos.buscar') }}" method="GET" class="form-inline justify-content-center">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="rut_cliente" id="nombres" placeholder="Ingrese RUT del Cliente" required>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                        </form>
                    </div>

                    <div class="text-center mt-5">
                        <p class="font-italic text-muted">
                            "La столица turística de Chile"
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
