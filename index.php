<?php
    session_start();
    if(empty($_SESSION["username"])){
        header('location: login.php');
    }
?>
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
        
            <h1>Bienvenido!!!</h1>
            <?php
            echo "hola " . $_SESSION["username"];
            // echo "hola" . $_SESSION["Name"] . $_SESSION["LastName"];
            ?>
            <a href="controlador/controlador_cerrar_session.php">salir de la session </a>
            
        
    </div>

    <script src="./app.js"></script>
</body>
</html>