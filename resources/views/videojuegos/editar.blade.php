<!-- resources/views/videojuegos/editar.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Videojuego</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Editar Videojuego</h3>
        <form action="{{ route('videojuegos.update', ['id' => $videojuego->id]) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="NombreV" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="NombreV" name="NombreV" value="{{ $videojuego->NombreV }}" required>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $videojuego->precio }}" required>
            </div>
            <div class="mb-3">
                <label for="disponibilidad" class="form-label">Disponibilidad</label>
                <select class="form-control" id="disponibilidad" name="disponibilidad">
                    <option value="1" {{ $videojuego->disponibilidad ? 'selected' : '' }}>Disponible</option>
                    <option value="0" {{ !$videojuego->disponibilidad ? 'selected' : '' }}>No disponible</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="peso" class="form-label">Peso</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" value="{{ $videojuego->peso }}" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Videojuego</button>
        </form>
    </div>
</body>
</html>
