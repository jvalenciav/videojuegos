<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de Imagen - Call of Duty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #1a1f33;
            color: #f5f5f5;
            font-family: 'Poppins', sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding: 20px;
        }
        
        .image-container {
            max-width: 300px;
            max-height: 300px;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
            transition: transform 0.3s;
            margin-bottom: 20px;
        }

        .image-container:hover {
            transform: scale(1.05);
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 15px;
        }

        h1 {
            font-size: 2.5rem;
            color: #ffdb3c;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        p {
            font-size: 1.1rem;
            max-width: 600px;
            line-height: 1.6;
            color: #dcdcdc;
            margin-bottom: 30px;
        }

        .price {
            font-size: 1.8rem;
            color: #ffdb3c;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .btn-custom {
            font-size: 1rem;
            padding: 10px 20px;
            margin: 5px;
            color: #ffdb3c;
            background-color: transparent;
            border: 2px solid #ffdb3c;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn-custom:hover {
            background-color: #ffdb3c;
            color: #1a1f33;
            box-shadow: 0 4px 8px rgba(255, 219, 60, 0.4);
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Call of Duty</h1>
        <div class="image-container">
            <img src="{{ asset('img/callofduty.png') }}" alt="Call of Duty">
        </div>
        <p>Call of Duty es una de las franquicias de videojuegos de disparos en primera persona más populares y longevas de la industria, desarrollada principalmente por Infinity Ward y publicada por Activision. La serie se centra en ofrecer una experiencia de combate realista y cinematográfica, llevando a los jugadores a escenarios de guerra en distintas épocas y regiones del mundo.</p>
        <div class="price">Precio: $15.00</div>
        <div>
            <button type="button" class="btn btn-custom">Comprar</button>
            <button type="button" class="btn btn-custom">Agregar al Carro</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
