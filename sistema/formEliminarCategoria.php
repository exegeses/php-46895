<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $cantidad = verificarProducto();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>baja de un categoría</h1>

        <article class="card border-danger col-6 mx-auto">
<?php
        // si la cantidad es > que 0
        if( $cantidad > 0 ){
?>
            No se puede eliminar la categoría seleccionada,
            ya que tiene productos relacionados.
            <br>

<?php
        }
        else{
            //obtenemos nombre de la categoría
            $categoria = verCategoriaPorID();
?>
            <form action="eliminarCategoria.php" method="post">
                Se eliminará la categoría:
                <span class="lead"><?= $categoria['catNombre'] ?></span>
                <input type="hidden" name="idCategoria"
                       value="<?= $categoria['idCategoria'] ?>">
                <br>
                <button class="btn btn-danger btn-block my-3">
                    Confirmar baja
                </button>
            </form>
            <script>
                Swal.fire(
                    'Advertencia',
                    'Si pulsa el botón "Confirmar baja", se eliminará la categoría.',
                    'warning'
                )
            </script>
<?php
        }
?>
            <a href="adminCategorias.php" class="btn btn-outline-secondary">
                Volver a panel
            </a>

        </article>



    </main>

<?php  include 'includes/footer.php';  ?>