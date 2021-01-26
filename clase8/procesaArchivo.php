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

