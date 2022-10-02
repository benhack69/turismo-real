<?php 
include "conexion.php";
session_start();
if (!empty($_POST["loginbtn"])) {
    if (!empty($_POST["rut_emp"]) and !empty($_POST["contrasena"])) {

        $rut_emp = $_POST["rut_emp"];
        $contrasena = $_POST["contrasena"];
        $sql= $conn->query("select * from empleado where rut_emp='$rut_emp' and contrasena='$contrasena'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["nombre_emp"]=$datos->nombre_emp;
            $_SESSION["apellido_emp"]=$datos->apellido_emp;
            header("location: index.php");
        } else {
            echo '<div class="alert alert-danger"> Usuario No Existe</div>';
        }
        
    } else {
        echo '<div class="alert alert-info">Campos Vacíos</div>';
    }
    
}
?>