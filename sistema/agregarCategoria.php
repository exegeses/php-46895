<?php  

    require 'funciones/conexion.php';
    require 'funciones/categorias.php';
    $chequeo = agregarCategoria();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una categoría</h1>

        si (altaok)
            Categoría agregada correctamente

        sino
            No se pudo agregar la categoría

    </main>

<?php  include 'includes/footer.php';  ?>