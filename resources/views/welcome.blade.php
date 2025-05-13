<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RentValpoCar</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'figtree', sans-serif;
            background-color: #f8f9fa; /* Fondo blanco muy suave */
            color: #333; /* Texto principal oscuro */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #ffffff;
            padding: 2rem 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff; /* Azul atractivo */
            text-decoration: none;
        }

        .hero {
            background-image: url('{{ asset('images/portada-autos.jpg') }}'); /* Reemplaza con la ruta de tu imagen de portada */
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 8rem 0;
            margin-bottom: 2rem;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .hero-button {
            display: inline-block;
            background-color: #28a745; /* Verde llamativo */
            color: #fff;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .hero-button:hover {
            background-color: #218838;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
        }

        .featured-cars {
            padding: 2rem 0;
            text-align: center;
        }

        .featured-cars h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #007bff;
        }

        .car-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 1rem;
        }

        .car-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.08);
            overflow: hidden;
        }

        .car-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .car-details {
            padding: 1rem;
            text-align: center;
        }

        .car-details h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .car-details p {
            font-size: 0.9rem;
            color: #666;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            margin-top: auto;
            background-color: #f8f9fa;
            color: #666;
            border-top: 1px solid #eee;
        }
    </style>
</head>
<body class="antialiased">
    <header>
        <a href="/" class="logo">RentValpoCar</a>
    </header>

    <div class="hero">
        <div class="hero-content">
            <h1 class="hero-title">Encuentra el Auto Perfecto para tu Aventura en Valparaíso</h1>
            <p class="hero-subtitle">La mejor selección de vehículos a precios increíbles. ¡Explora la ciudad a tu propio ritmo!</p>
            <a href="{{ route('clientes.create') }}" class="hero-button">¡Reserva Ahora!</a>
        </div>
    </div>

    <div class="container">
        <section class="featured-cars">
            <h2>Nuestros Autos Destacados</h2>
            <div class="car-grid">
                <div class="car-card">
                    <img src="{{ asset('images/auto1.jpg') }}" alt="Auto Destacado 1">
                    <div class="car-details">
                        <h3>Sedán Económico</h3>
                        <p>Ideal para moverte por la ciudad con eficiencia.</p>
                    </div>
                </div>
                <div class="car-card">
                    <img src="{{ asset('images/auto2.jpg') }}" alt="Auto Destacado 2">
                    <div class="car-details">
                        <h3>SUV Familiar</h3>
                        <p>Espacio y comodidad para toda tu familia o grupo.</p>
                    </div>
                </div>
                <div class="car-card">
                    <img src="{{ asset('images/auto3.jpg') }}" alt="Auto Destacado 3">
                    <div class="car-details">
                        <h3>Hatchback Ágil</h3>
                        <p>Perfecto para estacionar y disfrutar de las calles angostas.</p>
                    </div>
                </div>
                </div>
            <a href="#" class="hero-button" style="margin-top: 2rem;">Ver Todos los Autos</a>
        </section>
    </div>

    <footer>
        <p>&copy; {{ date('Y') }} RentValpoCar. Todos los derechos reservados.</p>
    </footer>
</body>
</html>