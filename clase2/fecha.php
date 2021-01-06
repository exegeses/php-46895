<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Fecha en php</h1>
    <?php
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $diaSemana = date('w');
        $diaMes = date('d');
        $mes = date('m');
        $anio = date('Y');
        echo $diaSemana;
        echo '<br>';
        echo $diaMes, '/',  $mes, '/', $anio;
    ?>
    <br>
    <?php
        echo date('d/m/Y H:i:s');
    ?>
    <br>
    TAREA: mostrar hoy es Martes 5 de enero de 2021
    de manera dinámica

    nota: no funciona setLocale()

</body>
</html>