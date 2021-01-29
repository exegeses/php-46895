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

    /*
     * listarMarcas()
     * verMarcaPorID()
     * agregarMarca()
     * modificarMarca()
     * eliminarMarca()
     * */