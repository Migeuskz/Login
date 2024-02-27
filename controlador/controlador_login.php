<?php
session_start();
    if(!empty($_POST["btningresar"])){
        // echo "boton presionado";
        if(!empty($_POST['username']) and !empty($_POST['passw'])){
            $usuario = $_POST['username'];
            $password = $_POST['passw'];
            // echo $usuario;
            // echo $password;
            $sql= $conexion->query("SELECT * FROM users WHERE username='$usuario' AND passw='$password'");
            if($datos=$sql->fetch_object()){
                $_SESSION["ID_Users"]=$datos->id;
                $_SESSION["username"]=$datos->username;
                
                header( 'Location: index.php'); 
            }else{
                echo "Usuario o contraseña incorrecta.";
            }
            // require_once("conexion.php");
        }else{
            echo "campos vacios";
        }
    }
?>