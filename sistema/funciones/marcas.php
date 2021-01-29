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
     * función àra modificar una marca
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

    /*
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */