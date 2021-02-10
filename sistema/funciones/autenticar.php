<?php


    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido 
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND usuPass = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        // si $cantidad es 0 -> login mal
        // si $cantidad es 1 -> login ok
        if( $cantidad == 0 ){
            //redirección a formLogin + mensaje
            header('location: formLogin.php?error=1');
        }
        else{
            ###### RUTINA DE AUTENTICACIÓN
            $_SESSION['login'] = 1;
            //redirección a admin
            header('location: admin.php');
        }
    }

    function logout()
    {
        session_unset();
        session_destroy();

    }

    function autenticar()
    {
        //si no está logueado
        if( !isset( $_SESSION['login'] ) ){
            //redirección a formLogin con error
            header('location: formLogin.php?error=1');
        }
    }