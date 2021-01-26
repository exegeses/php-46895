<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una marca</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar la marca.';
        if( $chequeo ) {
            $css = 'success';
            $mensaje = 'Marca agregada correctamente.';
        }
?>
        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="agregarMarca.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>