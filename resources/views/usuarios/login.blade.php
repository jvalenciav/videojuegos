<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        /* Estilos para centrar el formulario */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #1a1a2e;
        }

        .login-container {
            background-color: #16213e;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
        }

        .login-container h1 {
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

        input[type="email"],
        input[type="password"] {
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
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #00979d;
            box-shadow: 0 0 10px #00adb5, 0 0 20px #00adb5; /* Efecto de brillo */
        }

        .register-link {
            margin-top: 1rem;
            color: #00adb5;
            font-size: 0.9rem;
            display: block;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .register-link:hover {
            color: #00979d;
        }

        .error-messages {
            color: #ff4b5c;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="{{ route('usuarios.login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="CorreoUsuario">Correo Electrónico:</label>
                <input type="email" name="CorreoUsuario" id="CorreoUsuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit" class="submit-btn">Iniciar Sesión</button>
     
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

        <!-- Enlace para registrarse -->
        <a href="{{ route('usuarios.register') }}" class="register-link">¿No tienes cuenta? Regístrate aquí</a>
    </div>

</body>
</html>
