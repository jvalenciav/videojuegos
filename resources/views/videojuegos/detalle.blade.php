<!-- resources/views/videojuegos/detalle.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Detalles del Videojuego</h3>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $videojuego->NombreV }}</h5>
                <p class="card-text"><strong>Precio:</strong> ${{ $videojuego->precio }}</p>
                <p class="card-text"><strong>Disponibilidad:</strong> {{ $videojuego->disponibilidad ? 'Disponible' : 'No disponible' }}</p>
                <p class="card-text"><strong>Peso:</strong> {{ $videojuego->peso }} GB</p>
                @if($videojuego->foto)
                    <p><img src="{{ url('img/'.$videojuego->foto) }}" alt="Foto del videojuego" width="200"></p>
                @else
                    <p>No hay foto disponible</p>
                @endif
                <a href="{{ route('videojuegos.index') }}" class="btn btn-primary">Volver al listado</a>
            </div>
        </div>
    </div>
</body>
</html>
