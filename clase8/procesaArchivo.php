<?php

    $prdImagen = $_FILES['prdImagen'];
    
    echo '<pre>';
    print_r($prdImagen);
    echo '</pre>';

    echo 'Nombre orig: ', $_FILES['prdImagen']['name'];
    echo '<br>';
    echo 'Nombre temp: ', $_FILES['prdImagen']['tmp_name'];
    echo '<br>';
    echo 'Tipo: ', $_FILES['prdImagen']['type'];
    echo '<br>';

    ####################################
    ### mover al archivo desde el /tmp

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

