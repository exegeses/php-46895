<?php

    session_start();
    //eliminar una variable
    unset($_SESSION['numero']);

    //eliminar todas las variables de sesión
    session_unset();

    //eliminar una sesión
    session_destroy();