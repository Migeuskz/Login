<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form action="" class="login">
            <h1>Registro App</h1>
            <label for="usuario">Usuario: </label>
            <input type="text" id="username" placeholder="Nombre de Usuario" name="username">
            <label for="password">Contraseña</label>
            <!-- <input type="text" id="password" placeholder="Contraseña"> -->
            <input type="password" name="password" id="password" placeholder="Contraseña">
            <p>Ya tengo una cuenta <a href="./login.php">LOG IN</a></p>
            <input type="submit" class="submit" value="REGISTRAR">
        </form>
        
    </div>

    <script src="./app.js"></script>
</body>
</html>