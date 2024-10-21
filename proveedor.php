<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-whO/Aaq6Ehp3oUbkRwEIuc/dt7TmVk05/TAb4FuS92EoiREm48j37xf6+oVOF8B6" crossorigin="anonymous">
    <style>
        body {
            background-color: #001244; 
            height: 100vh; /* Hace que el cuerpo del documento ocupe toda la ventana */
            margin: 0; /* Elimina márgenes */
            overflow: hidden; /* Evita el scroll */
        }

        .titulo {
            color: #00d1ff; 
            font-size: 3rem;
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: #00d1ff; 
            border: none;
            font-size: 1.2rem;
            padding: 15px 30px;
            color: white;
        }

        .btn-custom:hover {
            background-color: #00b3e0;
        }

        .container {
            margin-top: 30px; /* Reducido para acercar más el contenido */
        }

        .center-content {
            display: flex;
            justify-content: flex-start; /* Alinea el contenido en la parte superior */
            align-items: center;
            flex-direction: column;
            height: 100%;
            padding-top: 20px; /* Añade un pequeño espacio arriba */
        }

        .buttons-container {
            display: flex;
            gap: 30px;
        }

        .single-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="container center-content text-center">
        <h1 class="titulo">Proveedor</h1>
        <div class="buttons-container">
            <button type="button" class="btn btn-custom">Visualizar Productos</button>
            <button type="button" class="btn btn-custom">Registrar Productos</button>
        </div>
        <div class="single-button">
            <button type="button" class="btn btn-custom">Visualizar Pedidos</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoNXyf4RKaKNlJE5Bbd5Yy6wrqrnQq4P5R5hBdsbjoQ6TE1" crossorigin="anonymous"></script>
</body>
</html>
