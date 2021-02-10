<?php

    session_start();
    //leer variable de session
    $nombre = $_SESSION['nombre'];
    echo $nombre;