<?php

    //declaración
    function negrita( $frase ){
        return '<b>'. $frase. '</b><br>';
    }

    function sumar( $nro1, $nro2 ){
        $resultado = $nro1 + $nro2;
        return $resultado;
    }

    //llamado a ejecución
    echo negrita( 'Hola Mundo' );
    echo negrita( 'PHP y mySQL' );
    echo negrita( 11*3 );

    echo sumar( 10, 20 );

    echo '<hr>';
    echo negrita( sumar( 3, 5) );  //7<b></b><br>

