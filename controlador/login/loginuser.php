<?php 
include "conexion.php";
session_start();
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["email"]) and !empty($_POST["contrasena"])) {

        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];
        $sql= $conn->query("select * from cliente where email='$email' and contrasena='$contrasena'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["nombre"]=$datos->nombre;
            $_SESSION["apellido"]=$datos->apellido;
            header("location: index.php");
        } else {
            echo "no existe usuario";
        }
        
    } else {
        echo "campos vacios";
    }
    
}
?>