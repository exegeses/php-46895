<?php

    ###################
    ## CRUD de categorías

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }

    function verCategoriaPorID()
    {
        $link = conectar();
        $idCategoria = $_GET['idCategoria'];
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        $categoria = mysqli_fetch_assoc($resultado);
        return $categoria;
    }

    function agregarCategoria()
    {
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias
                        VALUES
                            ( DEFAULT, '".$_POST['catNombre']."' )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * función para chequear si hay uno o más productos
     * de una categoría
     * @return bool
     *
    */
    function verificarProducto()
    {
        $idCategoria = $_GET['idCategoria'];
        $link = conectar();
        $sql = "SELECT 1 FROM productos
                    WHERE idCategoria = ".$idCategoria;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return  $cantidad;
    }



    /*
     * listarCategorias()
     * verCategoriaPorID()
     * agregarCategoria()
     * modificarCategoria()
     * eliminarCategoria()
     * */