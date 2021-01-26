<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una categoría</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar la categoría.';
        if( $chequeo ) {
            $css = 'success';
            $mensaje = 'Categoría agregada correctamente.';
        }
?>
        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="agregarCategoria.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>