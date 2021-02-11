<?php

    ###################
    ## CRUD de marcas

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * función para agregar una marca
     *
     * @return bool
     */
    function agregarMarca()
    {
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "INSERT INTO marcas
                        VALUES
                            ( DEFAULT, '".$mkNombre."' )";
        $resultado = mysqli_query( $link, $sql )
                            or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * función para ver una marca por su id
     * @return array:$marca
     */
    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                                or die( mysqli_error($link) );
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }

    /**
     * función para modificar una marca
     * @return $resultado:bool
    */
    function modificarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $mkNombre = $_POST['mkNombre'];
        $link = conectar();
        $sql = "UPDATE marcas
                    SET mkNombre = '".$mkNombre."'
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        return $resultado;
    }

    /**
     * función para chequear si hay uno o más productos
     * de una marca
     * @return bool
     *
     */
    function verificarProducto()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT 1 FROM productos
                        WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        return  $cantidad;
    }

    /**
     * Función para eliminar una marca
     * @return bool|mysqli_result
     */
    function eliminarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE marcas 
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
            or die(mysqli_error($link));
        return $resultado;
    }

    /*
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */