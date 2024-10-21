<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de Administrador</title>
    
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #00103d; 
            color: #00d4ff; 
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            font-size: 3rem;
            font-family: 'Courier New', Courier, monospace;
        }
        .btn-custom {
            background-color: #00d4ff; 
            color: white;
            border: none;
            margin-bottom: 15px;
            width: 100%;
        }
        .btn-custom:hover {
            background-color: #00a3cc; 
        }
        .container {
            margin-top: 50px;
        }
        .row {
            justify-content: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Administrador</h1>
        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-custom">Visualizar Usuarios</button>
                <button class="btn btn-custom">Visualizar Productos</button>
                <button class="btn btn-custom">Visualizar Clientes</button>
                <button class="btn btn-custom">Visualizar Proveedores</button>
                <button class="btn btn-custom">Visualizar Pedidos</button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-custom">Registrar Usuarios</button>
                <button class="btn btn-custom">Registrar Productos</button>
                <button class="btn btn-custom">Registrar Clientes</button>
                <button class="btn btn-custom">Registrar Proveedores</button>
                <button class="btn btn-custom">Registrar Pedidos</button>
            </div>
        </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
