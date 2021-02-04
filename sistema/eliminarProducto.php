<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = eliminarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se pudo eliminar el producto.';
        if( $chequeo ) {
            $css = 'success';
            $mensaje = 'Producto eliminado correctamente.';
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