<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $chequeo = agregarMarca();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una marca</h1>

        si (altaok)
            Marca agregada correctamente

        sino
            No se pudo agregar la marca

    </main>

<?php  include 'includes/footer.php';  ?>