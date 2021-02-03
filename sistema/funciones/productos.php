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

        ##  si no enviaron archivo en formAgregar
        $prdImagen = 'noDisponible.jpg';

        ## si no enviaron archivo en formModificar
        if( isset( $_POST['imgActual']) ){
            $prdImagen = $_POST['imgActual'];
        }
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

    /**
     * función para mostrar datos de un producto por su ID
     * @return $producto:array
     */
    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT  
                        idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, 
                        p.idCategoria, catNombre,
                        prdPresentacion, prdStock, prdImagen
                 FROM   productos p, marcas m, categorias c
                 WHERE  p.idMarca = m.idMarca
                    AND p.idCategoria = c.idCategoria
                    AND idProducto = ".$idProducto;
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }

    function modificarProducto()
    {
        // capturamos datos enviados por el form
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirArchivo();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql = "UPDATE productos 
                    SET
                        prdNombre = '".$prdNombre."',
                        prdPrecio = ".$prdPrecio.",
                        idMarca = ".$idMarca.",
                        idCategoria = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."',
                        prdStock = ".$prdStock.",
                        prdImagen = '".$prdImagen."'
                 WHERE  idProducto = ".$idProducto;

        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;

    }