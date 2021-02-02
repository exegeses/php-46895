<?php

    ###################
    ## CRUD de productos

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT  
                        idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, 
                        p.idCategoria, catNombre,
                        prdPresentacion, prdImagen
                 FROM   productos p, marcas m, categorias c
                 WHERE  p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria";
        $resultado = mysqli_query( $link, $sql )
                                or die( mysqli_error($link) );
        return $resultado;
    }

    /**
     * Función para subir un archivo
     * @return string:$prdImagen
     */
    function subirArchivo()
    {

        ##  si no enviaron archivo
        $prdImagen = 'noDisponible.jpg';

        ## si enviaron archivo y esta todo ok
        if( $_FILES['prdImagen']['error'] == 0 ){

            // directorio de destino
            $ruta = 'productos/';
            //nombre y ubicación temporal
            $temp = $_FILES['prdImagen']['tmp_name'];
            //renombramos archivo
            # nombre original
            //$prdImagen = $_FILES['prdImagen']['name'];
            # nombre concatenado time() + extensión
            $ext = pathinfo($_FILES['prdImagen']['name']);
            $ext = $ext['extension'];
            # nombre temporal sin ruta completa
            $temporal = pathinfo($_FILES['prdImagen']['tmp_name']);
            $temporal = $temporal['filename'];
            $prdImagen = $temporal.'.'.$ext;

            move_uploaded_file($temp, $ruta.$prdImagen);
        }
        return $prdImagen;
    }

    function agregarProducto()
    {
        // capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();

        $link = conectar();
        $sql = "INSERT INTO productos 
                    VALUES 
                        (
                            DEFAULT,
                            '".$prdNombre."',
                            ".$prdPrecio.",
                            ".$idMarca.",
                            ".$idCategoria.",
                            '".$prdPresentacion."',
                            ".$prdStock.",
                            '".$prdImagen."'
                        )";

        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        return $resultado;

    }