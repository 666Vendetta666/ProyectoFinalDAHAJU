<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-whO/Aaq6Ehp3oUbkRwEIuc/dt7TmVk05/TAb4FuS92EoiREm48j37xf6+oVOF8B6" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            overflow: hidden;
        }

        .left-section {
            background-color: #001244; 
            width: 50%; 
            height: 100%;
        }

        .right-section {
            width: 50%; 
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 80%;
            text-align: center;
        }

        .login-header {
            background-color: #00d1ff;
            padding: 20px;
            color: white;
            margin-bottom: 20px;
        }

        .login-title {
            font-size: 2rem; 
            margin: 0;
        }

        .login-subtitle {
            font-size: 1rem;
            margin: 0;
        }

        .login-form {
            text-align: left;
        }

        .form-label {
            color: black;
            font-weight: bold;
        }

        .form-control {
            border: 2px solid #00d1ff; 
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .btn-submit {
            background-color: #00d1ff;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            text-transform: uppercase;
        }

        .btn-submit:hover {
            background-color: #00b3e0;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="left-section"></div>

    <div class="right-section">
        <div class="login-box">
            <div class="login-header">
                <div class="login-title">Registrar Usuario</div>
            </div>

            <div class="login-form">
                <form>
                    <div class="form-group">
                        <label for="usuario" class="form-label">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="form-group">
                        <label for="contraseña" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="contraseña" placeholder="Ingresa tu contraseña">
                    </div>
                    <div class="form-group">
                        <label for="tipoUsuario" class="form-label">Tipo de Usuario:</label>
                        <select id="tipoUsuario" class="form-control">
                            <option value="" disabled selected>Selecciona el tipo de usuario</option>
                            <option value="admin">Administrador</option>
                            <option value="usuario">Usuario</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoNXyf4RKaKNlJE5Bbd5Yy6wrqrnQq4P5R5hBdsbjoQ6TE1" crossorigin="anonymous"></script>
</body>
</html>
