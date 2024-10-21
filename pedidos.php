<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-whO/Aaq6Ehp3oUbkRwEIuc/dt7TmVk05/TAb4FuS92EoiREm48j37xf6+oVOF8B6" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #001244; 
        }

        .container {
            width: 95%;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            border: 2px solid #ffd700;
        }

        .table-container {
            overflow-x: auto;
            margin-bottom: 20px;
        }

        h1 {
            text-align: center;
            color: #00d1ff;
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-family: Arial, sans-serif;
            text-transform: uppercase;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-family: Arial, sans-serif;
        }

        th {
            padding: 10px;
            background-color: white;
            color: black;
            font-weight: bold;
            text-align: center;
            border: 1px solid white; 
        }

        td {
            background-color: #001244;
            height: 300px; 
        }

        .btn-regresar {
            display: block;
            width: 20%;
            margin: 0 auto;
            padding: 10px;
            background-color: #00d1ff;
            color: white;
            font-size: 1.2rem;
            text-align: center;
            border: none;
            border-radius: 4px;
            text-transform: uppercase;
            font-family: Arial, sans-serif;
        }

        .btn-regresar:hover {
            background-color: #00b3e0;
        }

    </style>
</head>
<body>

    <div class="container">
        <h1>Pedidos</h1>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Pedidos</th>
                        <th>ID Proveedor</th>
                        <th>ID Producto</th>
                        <th>ID Cliente</th>
                        <th>Descripción</th>
                        <th>Número Ítems</th>
                        <th>Precio Total</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td colspan="7"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="btn-regresar">Regresar</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoNXyf4RKaKNlJE5Bbd5Yy6wrqrnQq4P5R5hBdsbjoQ6TE1" crossorigin="anonymous"></script>
</body>
</html>
