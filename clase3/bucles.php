<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Estructuras de repetición</h1>

    <?php
        $n = 1;
        while ( $n <= 15 ){
            echo $n;
            echo '<br>';
            $n++; // $n = $n+1;
        }
    ?>
    <hr>
    <div class="objeto">
    <?php
    $alemanes = [
                    'Audi', 'BMW', 'Volkswagen',
                    'Mercedes Benz', 'Porsche', 'RUF',
                    'Opel', 'Daimler'
                ];

    $n = 0;
    echo '<ul>';
    while( $n < 8 ){
        echo '<li>';
        echo $alemanes[$n];
        echo '</li>';
        $n++;
    }
    echo '</ul>'
    ?>
    </div>
</body>
</html>