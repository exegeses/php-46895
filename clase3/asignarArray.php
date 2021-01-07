<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Asignar valores a un array</h1>
    <div class="objeto">
    <?php
        $alemanes = [ 'Audi', 'BMW', 8 => 'Volkswagen', 'Mercedes Benz', 12 => 'Porsche', 'RUF', 'Opel', 'Daimler' ];
        echo '<pre>';
        print_r($alemanes);
        echo '</pre>';
    ?>
        <br>
    <?php
        $moviles = [
                    'Motorola'=>'Moto G',
                    'Samsung'=>'S20',
                    'iPhone'=>'Pro 12',
                    'Xiaomi'=>'MI 9',
                    'Huawei'=>'Prolite',
                    'Güindous'=>'foun'
                ];
        echo '<pre>';
        print_r($moviles);
        echo '</pre>';
    ?>
    </div>
</body>
</html>