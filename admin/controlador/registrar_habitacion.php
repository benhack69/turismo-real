<?php
if (!empty($_POST["agregar"])) {
    if (!empty($_POST["desc_depto"]) and !empty($_POST["nombre_hab"]) and !empty($_POST["piezas"]) and !empty($_POST["banos"]) and !empty($_POST["televisores"]) and !empty($_POST["ventanas"]) and !empty($_POST["id_comuna"]) and !empty($_POST["valor_habitacion"]) and !empty($_POST["disponibilidad"]) and !empty($_POST["desc_habitacion"]) ) {
        $desc_depto=$_POST["desc_depto"];
        $nombre_hab=$_POST["nombre_hab"];
        $calle=$_POST["calle"];
        $piezas=$_POST["piezas"];
        $banos=$_POST["banos"];
        $televisores=$_POST["televisores"];
        $ventanas=$_POST["ventanas"];
        $id_comuna=$_POST["id_comuna"];
        $valor_habitacion=$_POST["valor_habitacion"];
        $disponibilidad=$_POST["disponibilidad"];
        $desc_habitacion=$_POST["desc_habitacion"];

        $sql = $conn->query("insert into departamento(calle,desc_depto,nombre_hab,desc_habitacion,piezas,banos,valor_habitacion,disponibilidad,televisores,ventanas,id_comuna)values('$calle','$desc_depto','$nombre_hab','$desc_habitacion','$piezas','$banos','$valor_habitacion','$disponibilidad','$televisores','$ventanas','$id_comuna') ");
        if ($sql==1) {
            echo '<div class="alert alert-success alert-dismissible fade show"> Habitacion Registrada</div>';
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