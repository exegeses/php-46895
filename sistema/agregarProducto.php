<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $chequeo = agregarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un producto</h1>

<?php
        $css = 'danger';
        $mensaje = 'No se pudo agregar el producto.';
        if( $chequeo ) {
            $css = 'success';
            $mensaje = 'Producto agregado correctamente.';
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