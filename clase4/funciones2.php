<?php

    //declaración
    /*
    function multiplicar( $nro1, $nro2)
    {
        if( is_numeric($nro1) && is_numeric($nro2) ){
            $resultado = $nro1 * $nro2;
            return $resultado;
        }
        else{
            return  "Ambos deben ser números";
        }
    }
    */

/*
    function multiplicar( $nro1, $nro2)
    {
        if( is_numeric($nro1) && is_numeric($nro2) ){
            $resultado = $nro1 * $nro2;
        }
        else{
            $resultado =  "Ambos deben ser números";
        }
        return $resultado;
    }
*/
    function multiplicar( $nro1, $nro2)
        {
            $resultado =  "Ambos deben ser números";
            if( is_numeric($nro1) && is_numeric($nro2) ){
                $resultado = $nro1 * $nro2;
            }
            return $resultado;
        }

    echo multiplicar( 5, 4);
    echo '<br>';
    echo multiplicar( 5, 'manzana' );

    #######
#    function conectar(){}
#    function agregarCategoria(){}
#    function modificarMarca(){}