<?php 
if (!empty($_POST["agregar"])) {
    if (!empty($_POST["rut_emp"]) and !empty($_POST["nombre_emp"]) and !empty($_POST["apellido_emp"]) and !empty($_POST["nacionalidad"]) and !empty($_POST["email"]) and !empty($_POST["contrasena"]) and !empty($_POST["id_puesto"])){
        $rut_emp = $_POST["rut_emp"];
        $nombre_emp = $_POST["nombre_emp"];
        $apellido_emp = $_POST["apellido_emp"];
        $nacionalidad = $_POST["nacionalidad"];
        $email = $_POST["email"];
        $contrasena = $_POST["contrasena"];
        $id_puesto = $_POST["id_puesto"];

        $sql= $conn->query("INSERT INTO empleado (rut_emp, nombre_emp, apellido_emp, nacionalidad, email, contrasena, estado, id_puesto) VALUES ('$rut_emp','$nombre_emp','$apellido_emp','$nacionalidad','$email','$contrasena','Activo','$id_puesto')");

        if ($sql == 1) {
            echo '<div class="alert alert-success alert-dismissible fade show"> Empleado Registrado</div>';
            echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show">Registro Incorrecto</div>';
            echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
        }
    
    } else {
        echo '<div class="alert alert-info alert-dismissible fade show">Campos Vacios</div>';
            echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
    }
}
?>