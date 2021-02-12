<?php

    const SERVER    = 'localhost';
#    const USUARIO   = 'id16140864_root';
#    const CLAVE     = 'E7(9m>Kqb9D+?bMm';
#    const BASE      = 'id16140864_catalogo';
    const USUARIO   = 'root';
    const CLAVE     = 'root';
    const BASE      = 'catalogo';

    function conectar()
    {
        $link = mysqli_connect(
            SERVER,
            USUARIO,
            CLAVE,
            BASE
        );
        return $link;
    }

