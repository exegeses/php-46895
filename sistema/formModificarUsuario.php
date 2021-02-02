<?php
    require "funciones/conexion.php";
    require "funciones/usuarios.php";
    $usuario = verUsuarioPorID();
    include 'includes/header.html';
    include 'includes/nav.php';
?>

    <main class="container">
        <h1>Modificacion de usuario</h1>


        <div class='alert bg-light p-4 col-8 mx-auto border shadow-sm'>
            <form action="modificarUsuario.php" method="post">
                <div class='form-group'>
                    <label for="usuNombre">Nombre</label>
                    <input type="text" name="usuNombre"
                           value="<?=$usuario["usuNombre"] ?>"
                           class='form-control' id="usuNombre" required>
                    <br>
                    <label for="usuApellido">Apellido</label>
                    <input type="text" name="usuApellido"
                           value="<?= $usuario['usuApellido'] ?>"
                           class='form-control' id="usuApellido" required>
                    <br>
                    <label for="usuEmail">Email</label>
                    <input type="email" name="usuEmail"
                           value="<?= $usuario['usuEmail'] ?>"
                           class='form-control' id="usuEmail" required>
                    <br>

                </div>
                <input type="hidden" name="idUsuario" value="<?= $usuario["idUsuario"]?>">
                <button class='btn btn-dark my-3 mr-3 px-4'>Modificar usuario</button>
                <a href="adminUsuarios.php" class='btn btn-outline-secondary'>
                    Volver a panel de usuarios
                </a>
            </form>

        </div>



    </main>

<?php  include 'includes/footer.php';  ?>