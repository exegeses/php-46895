<?php  
	session_start();
	require 'funciones/conexion.php';
	require 'funciones/productos.php';
	$productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
<?php
        while( $producto = mysqli_fetch_assoc($productos) ){
?>
            <div class="card col">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail img-top">
                <div class="card-body text-secondary">
                    <h2><?= $producto['prdNombre'] ?></h2>
                    <br>
                    <span class="lead">$<?= $producto['prdPrecio'] ?></span>
                    <br>
                    <?= $producto['catNombre'] ?>:
                    <?= $producto['mkNombre'] ?>

                </div>
            </div>
<?php
        }
?>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>