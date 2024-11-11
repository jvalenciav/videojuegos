<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Mejorada y Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fuente personalizada de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <style>
        .title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            color: #f5f5f5;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-top: 20px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s;
        }

        body {
            background-color: #16213e;
            color: #f5f5f5;
            margin: 0;
            height: 100vh;
        }

        /* Estilo para la barra de navegación */
        .navbar {
            background: linear-gradient(45deg, #1a1f33, #2a3c5f);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 0.8rem 1rem;
        }

        .nav-link {
            color: #f5f5f5 !important;
            transition: color 0.3s, background-color 0.3s, padding 0.3s;
            padding: 0.5rem 1rem;
        }

        .nav-link:hover {
            color: #f5f5f5 !important;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 5px;
        }

        .navbar-brand {
            color: #ffdb3c !important;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        .navbar-brand:hover {
            transform: scale(1.1);
            color: #ffffff !important;
        }

        .active-nav {
            border-bottom: 2px solid #ffc107;
        }

        /* Estilo para los iconos y contenedores de la página */
        .feature-box {
            background-color: #edc70a;
            color: #f5f5f5;
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            cursor: pointer;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin: 10px;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .feature-box img {
            max-width: 141px;
            max-height: 141px;
            margin-bottom: 0px;
        }

        .feature-text {
            font-weight: bold;
            font-size: 0.9rem;
            margin-top: 10px;
        }

        .horizontal-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: nowrap;
            gap: 20px;
        }

        /* Footer */
        .footer {
            background-color: #1a1f33;
            color: #f5f5f5;
        }
    </style>
</head>
<body>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href=#>Mi Perfil</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contáctanos</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button type="button" class="btn btn-outline-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Contenido de la Página -->
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="title">Videojuegos Destacados</h2>
        </div>

        <!-- Contenedor de Iconos con Imágenes -->
        <div class="horizontal-container">
            <!-- Botón con imagen de ejemplo -->
            <div class="feature-box">
            <img src="{{ asset('img/callofduty.png') }}" alt="Call of Duty">
              
            </div>
            <div class="feature-box">
            <img src="{{ asset('img/fornite.png') }}" alt="Fornite">              
           
            </div>
            <div class="feature-box">
            <img src="{{ asset('img/mine.png') }}" alt="Minecraft">              
            </div>
            <div class="feature-box">
            <img src="{{ asset('img/roblox.png') }}" alt="Roblox">              
            </div>
            <div class="feature-box">
            <img src="{{ asset('img/halo.png') }}" alt="Halo">              
            </div>
            <div class="feature-box">
            <img src="{{ asset('img/free.png') }}" alt="FreeFire">              
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer py-2 mt-5">
        <div class="container">
            <div class="text-center mt-2">
                <p class="mb-0 small">© 2024 Universidad Tecnologica del Valle de Toluca <a href="#" class="text-dark small">Envianos tus sugerencias</a> | <a href="#" class="text-dark small">Privacidad y Cookies</a></p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
