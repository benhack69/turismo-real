<?php 

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conn->query("update departamento set disponibilidad = 'No Disponible' where id_departamento ='$id'");

    if ($sql==1) {
        echo '<div class="alert alert-success alert-dismissible fade show"> Habitación Deshabilitada</div>';
        echo '<script>window.setTimeout(function () {
                $(".alert").fadeTo(1500, 0).slidedown(1000, function() {
                    $(this).remove();
            });
            },2000);   </script>';
    } else {
        echo '<div>Error al deshabilitar</div>';
    }
    
}

?>