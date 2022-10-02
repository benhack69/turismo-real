<?php

if (!empty($_POST["registro"])) {
    if (empty($_POST["rut"]) or empty($_POST["nombre"]) or empty($_POST["apellido"]) or empty($_POST["email"]) or empty($_POST["contrasena"]) ) {
        echo '<div class="alert alert-warning d-flex align-items-center"> Debe llenar todos los campos </div>';

        
    } else {
        $rut = $_POST["rut"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];

        $sql = $conn->query(" insert into cliente(rut,nombre,apellido,email,contrasena)values('$rut','$nombre','$apellido','$email','$contrasena') ");
        if ($sql==1){
            echo '<div class="alert alert-success d-flex align-items-center" role="alert"> Usuario Registrado Correctamente </div>';
            echo '<script>window.location="login.php"</script>';

        }else {
            echo '<div class="alert alert-success d-flex align-items-center" role="alert"> Error al registrar </div>';

        }

    }
}

?>