<?php
    $colores = [
                'rojo', 'azul', 'verde',
                'violeta', 'rosa', 'gris',
                'naranja', 'celeste'
            ];
    $cantidad = count($colores);
    $i = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            width: 850px;
            margin: auto;
            font-family: arial;
        }
        #contenedor{
            width: 300px;
            border: 1px solid #ccc;
            padding: 20px;
        }

    </style>
</head>
<body>
    <h1>muestra de colores</h1>
    <div id="contenedor">
<?php
        while( $i < $cantidad ){
?>
            <img src="imagenes/<?= $colores[$i] ?>.png">
            color <?= $colores[$i] ?>
            <br>
<?php
            $i++;
        }
?>
    </div>

</body>
</html>
