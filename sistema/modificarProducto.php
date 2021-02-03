<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = modificarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Modificación de un producto</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se pudo modificar el producto.';
        if( $chequeo ) {
            $css = 'success';
            $mensaje = 'Producto modificado correctamente.';
        }
?>
        <div class="alert alert-<?= $css ?> col-8 mx-auto">
            <?= $mensaje ?>
            <a href="adminProductos.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>