<!-- resources/views/videojuegos/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Videojuegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Listado de Videojuegos</h3>
        <a href="{{ route('videojuegos.crear') }}" class="btn btn-success mb-3">Crear nuevo videojuego</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Disponibilidad</th>
                    <th>Peso</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($videojuegos as $videojuego)
                    <tr>
                        <td>{{ $videojuego->id }}</td>
                        <td>{{ $videojuego->NombreV }}</td>
                        <td>{{ $videojuego->precio }}</td>
                        <td>{{ $videojuego->disponibilidad ? 'Disponible' : 'No disponible' }}</td>
                        <td>{{ $videojuego->peso }}</td>
                        <td>
                            @if($videojuego->foto)
                                <img src="{{ url('img/'.$videojuego->foto) }}" alt="Foto" width="50">
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('videojuegos.show', $videojuego->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('videojuegos.edit', $videojuego->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('videojuegos.destroy', $videojuego->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este videojuego?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
