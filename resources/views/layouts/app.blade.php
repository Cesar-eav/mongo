<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Administrativo - RentValpoCar</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            min-height: 100vh;
        }
        .sidebar a {
            padding: 10px 20px;
            display: block;
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .content {
            padding: 20px;
        }
        .navbar {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">RentValpoCar Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('clientes.create') ? 'active' : '' }}" href="{{ route('clientes.create') }}">Ingresar Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('estacionamientos.create') ? 'active' : '' }}" href="{{ route('estacionamientos.create') }}">Ingresar Estacionamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('vehiculos.create') ? 'active' : '' }}" href="{{ route('vehiculos.create') }}">Ingresar Vehículo</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('arriendos.create') ? 'active' : '' }}" href="{{ route('arriendos.create') }}">Ingresar Arriendo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('clientes.index') ? 'active' : '' }}" href="{{ route('clientes.index') }}">Listar Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('estacionamientos.index') ? 'active' : '' }}" href="{{ route('estacionamientos.index') }}">Listar Estacionamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('vehiculos.index') ? 'active' : '' }}" href="{{ route('vehiculos.index') }}">Listar Vehículos</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('arriendos.index') ? 'active' : '' }}" href="{{ route('arriendos.index') }}">Listar Arriendos</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
