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
    <div class="objeto">
    <?php
        $diaSemana = date('w');
        if( $diaSemana == 0 ){
            $nombreDia = 'Domingo';
        }
        else if( $diaSemana == 1 ){
            $nombreDia = 'Lunes';
        }
        else if( $diaSemana == 2 ){
            $nombreDia = 'Martes';
        }
        else if( $diaSemana == 3 ){
            $nombreDia = 'Miércoles';
        }
        else if( $diaSemana == 4 ){
            $nombreDia = 'Jueves';
        }
        else if( $diaSemana == 5 ){
            $nombreDia = 'Viernes';
        }
        else{
            $nombreDia = 'Sábado';
        }
        echo 'Hoy es: ', $nombreDia;
    ?>
    </div>
    <div class="objeto">
    <?php
        $diaSemana = date('w');
        switch ( $diaSemana ){
            case 0:
                $nombreDia = 'Domingo';
                break;
            case 1:
                $nombreDia = 'Lunes';
                break;
            case 2:
                $nombreDia = 'Martes';
                break;
            case 3:
                $nombreDia = 'Miércoles';
                break;
            case 4:
                $nombreDia = 'Jueves';
                break;
            case 5:
                $nombreDia = 'Viernes';
                break;
            default:
                $nombreDia = 'Sábado';
                break;
        }
        echo 'Hoy es: ', $nombreDia;
    ?>
    </div>

    <div class="objeto">
    <?php
        $diaSemana = date('w');
        $semana = ["Domingo" ,"Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
        $diaMes = date('d');
        $mes = date('n');
        $meses = [1=>'enero','febrero','marzo','abril','mayo','junio','julio','agosto','septiembre','octubre','noviembre','diciembre'];
        $anio = date('Y');

        echo 'Hoy es: ', $semana[date('w')], ' ', $diaMes, ' de ', $meses[$mes], ' de ', $anio;
    ?>
    </div>
</body>
</html>