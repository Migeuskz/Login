
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
        <form action="" method="post" class="login">
            <h1>Login</h1>
            <?php
            include "./modelo/conexion.php";
            include "./controlador/controlador_login.php"
            ?>
            <label for="usuario">Usuario: </label>
            <input type="text" id="username" name="username" placeholder="Nombre de Usuario">
            <label for="password">Contraseña</label>
            <!-- <input type="text" id="password" placeholder="Contraseña"> -->
            <input type="password" name="passw" id="passw" placeholder="Contraseña">
            <p>una tienes una cuenta? <a href="./registro.php">Registrate</a></p>
            <input type="submit" class="submit" value="LOG IN" name="btningresar">
        </form>
        
    </div>

    <script src="./app.js"></script>
</body>
</html>