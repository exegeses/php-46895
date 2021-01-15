<?php

    $link = mysqli_connect(
                'localhost',
                'root',
                'root',
                'catalogo'
        );
/*
    echo '<pre>';
    print_r($link);
    echo '</pre>';
*/
    $sql = "SELECT idCategoria, catNombre 
                FROM categorias";

    $resultado = mysqli_query($link, $sql);
/*
    echo '<pre>';
    print_r($resultado);
    echo '</pre>';
*/

    while( $categoria = mysqli_fetch_assoc($resultado) ){
        echo $categoria['idCategoria'], ' ', $categoria['catNombre'], '<br>';
    }
