<?php

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    //print_r( filter_var($nombre, FILTER_VALIDATE_REGEXP, '/[a-zA-Z]/' ) )

    function retorno($nombre,$apellido)
    {
        if( is_string($nombre) && is_string($apellido) )
        {
            //filter_vars()
            $dame = $nombre. "<br>". $apellido;
            return $dame;
        }
        else
        {
            return  "Ingresaste mal los datos. tienen que ser caractéres alfabéticos";
        }

    }

    echo retorno($nombre,$apellido);

?>