<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Perfil del Administrador</h1>
        <div class="card">
            <div class="card-header">
                Información del Administrador
            </div>
            <div class="card-body">
                <ul>
                    <li><strong>Foto</strong><br>
                        @if($admin->FotoUsuario)
                            <img src="{{ asset('storage/' . $admin->FotoUsuario) }}" style="width: 150px; height: 150px; border-radius: 50%;">
                        @else
                            <p>No se ha proporcionado una foto.</p>
                        @endif
                    </li>
                    <li><strong>Rol:</strong> {{ $admin->ApeUsuario }}</li>
                    <li><strong>Nombre:</strong> {{ $admin->NombreUsuario }}</li>
                   
                    <li><strong>Correo Electrónico:</strong> {{ $admin->CorreoUsuario }}</li>
                </ul>
                <a href="{{ route('adminhome') }}" class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                    </svg>
                    Regresar
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
