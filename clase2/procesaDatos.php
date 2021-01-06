<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Imprimimos datos desde form</h1>
    <div class="objeto">
    <?php
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        echo 'Tu nombre es: ', $nombre;
        echo '<br>';
        echo 'Tu email es: ', $email;
    ?>

    </div>

</body>
</html>