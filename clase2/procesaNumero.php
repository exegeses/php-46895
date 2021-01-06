<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Muestreo de imagen</h1>
    <div class="objeto">
        <?php
        $numero = $_POST["numero"];
        if($numero<100){
            echo '<img src="imagenes/ok.png">';
        }
        else
        {
            echo '<img src="imagenes/error.png">';
        }
        ?>
    </div>

</body>
</html>