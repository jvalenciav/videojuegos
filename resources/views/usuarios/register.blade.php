<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1a1a2e;
        }

        .register-container {
            background-color: #16213e;
            padding: 2rem;
            border-radius: 90px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
        }

        .register-container h1 {
            color: #fff;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
            position: relative;
        }

        label {
            display: block;
            color: #ddd;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="file"] {
            width: 100%;
            padding: 0.5rem;
            border-radius: 5px;
            border: none;
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .submit-btn {
            width: 100%;
            padding: 0.7rem;
            margin-top: 1rem;
            background-color: #00adb5;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #00979d;
        }

        .error-messages {
            color: #ff4b5c;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Registrarse</h1>
        <form action="{{ route('usuarios.register.submit') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="NombreUsuario">Nombre:</label>
                <input type="text" name="NombreUsuario" id="NombreUsuario" required>
            </div>

            <div class="form-group">
                <label for="ApeUsuario">Apellido:</label>
                <input type="text" name="ApeUsuario" id="ApeUsuario" required>
            </div>

            <div class="form-group">
                <label for="CorreoUsuario">Correo Electrónico:</label>
                <input type="email" name="CorreoUsuario" id="CorreoUsuario" required>
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <div class="form-group">
                <label for="FotoUsuario">Foto de Perfil (opcional):</label>
                <input type="file" name="FotoUsuario" id="FotoUsuario" accept="image/*">
            </div>

            <button type="submit" class="submit-btn">Registrarse</button>
        </form>

        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>
