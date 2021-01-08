<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Estructuras de repetición</h1>

    <div class="objeto">
    <?php
    $alemanes = [
                    'Audi', 'BMW', 'Volkswagen',
                    'Mercedes Benz', 'Porsche', 'RUF',
                    'Opel', 'Daimler'
                ];
    $n = 0;
    ?>
    <ul>
    <?php
        while( $n < 8  ){
    ?>
        <li><?= $alemanes[$n] ?></li>
    <?php
            $n++;
        }
    ?>
    </ul>

    </div>
</body>
</html>