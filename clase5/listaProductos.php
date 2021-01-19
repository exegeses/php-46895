<?php
    require 'conexion.php';
    $link = conectar();
    $sql = "SELECT idProducto, prdNombre, prdPrecio, 
                    idMarca, idCategoria, 
                    prdPresentacion, prdStock, prdImagen
                FROM productos";
    $resultado = mysqli_query( $link, $sql );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>listado de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Listado de productos</h1>

        <table class="table table-border table-striped table-hover">
            <thead class="thead-warning">
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>precio</th>
                    <th>marca</th>
                    <th>categoria</th>
                    <th>presentación</th>
                    <th>stock</th>
                    <th>imagen</th>
                </tr>
            </thead>
            <tbody>
<?php
            while ( $producto = mysqli_fetch_assoc( $resultado ) ){
?>
                <tr>
                    <td><?= $producto['idProducto'] ?></td>
                    <td><?= $producto['prdNombre'] ?></td>
                    <td><?= $producto['prdPrecio'] ?></td>
                    <td><?= $producto['idMarca'] ?></td>
                    <td><?= $producto['idCategoria'] ?></td>
                    <td><?= $producto['prdPresentacion'] ?></td>
                    <td><?= $producto['prdStock'] ?></td>
                    <td><?= $producto['prdImagen'] ?></td>
                </tr>
<?php
            }
?>
            </tbody>
        </table>

    </main>

</body>
</html>