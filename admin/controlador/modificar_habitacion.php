<?php 
if (!empty($_POST["btneditar"])) {
    if (!empty($_POST["desc_depto"]) and !empty($_POST["nombre_hab"]) and !empty($_POST["calle"]) and !empty($_POST["piezas"]) and !empty($_POST["banos"]) and !empty($_POST["televisores"]) and !empty($_POST["ventanas"]) and !empty($_POST["id_comuna"]) and !empty($_POST["valor_habitacion"]) and !empty($_POST["disponibilidad"]) and !empty($_POST["desc_habitacion"])) {
        $id = $_POST["id"];
        $desc_depto = $_POST["desc_depto"];
        $nombre_hab = $_POST["nombre_hab"];
        $calle =$_POST["calle"];
        $piezas = $_POST["piezas"];
        $banos = $_POST["banos"];
        $televisores = $_POST["televisores"];
        $ventanas = $_POST["ventanas"];
        $id_comuna = $_POST["id_comuna"];
        $valor_habitacion = $_POST["valor_habitacion"];
        $disponibilidad = $_POST["disponibilidad"];
        $desc_habitacion = $_POST["desc_habitacion"];
        $sql = $conn->query("update departamento set desc_depto = '$desc_depto', nombre_hab ='$nombre_hab',calle='$calle',desc_habitacion='$desc_habitacion',piezas = $piezas, banos = $banos, televisores = $televisores, ventanas=$ventanas,valor_habitacion=$valor_habitacion,disponibilidad = '$disponibilidad', id_comuna='$id_comuna' where id_departamento=$id");
        if ($sql==1) {
            echo '<script>window.location="all-rooms.php"</script>';
            echo '<div class="alert alert-success alert-dismissible fade show"> Habitacion Modificada</div>';
            echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade show">Error al Modificar</div>';
            echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
        }
        
    }else {
        echo '<div class="alert alert-info alert-dismissible fade show">Campos Vacios</div>';
            echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
    }
}
?>