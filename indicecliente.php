<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #00103a; 
            color: #00caff; 
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            padding: 20px;
        }
        .header h1 {
            color: #00caff; 
            font-size: 48px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh; 
        }
        .button-container .btn {
            width: 200px;
            margin: 0 20px; 
            background-color: #00caff; 
            color: #ffffff;
            border: none;
            font-size: 18px;
            padding: 15px;
        }
        .button-container .btn:hover {
            background-color: #00a2d6; 
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Cliente</h1>
    </div>

    <div class="button-container">
        <a href="#" class="btn">Visualizar Productos</a>
        <a href="#" class="btn">Registrar Pedidos</a>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
