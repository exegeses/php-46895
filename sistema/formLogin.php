<?php  
	session_start();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light p-4 col-8 mx-auto border shadow">
            <form action="login.php" method="post">
                <label for="usuEmail">Usuario</label>
                <input type="email" name="usuEmail"
                       class='form-control' id="usuEmail" required>
                <br>
                <label for="usuPass">Contraseña</label>
                <input type="password" name="usuPass"
                       class='form-control' id="usuPass" required>
                <br>
                <button class="btn btn-dark my-3 mr-3 px-4 ">
                    Ingresar
                </button>
            </form>
        </div>

<?php
        //si se logueó mal
        if ( isset( $_GET['error'] ) ){
        //$error = $_GET['error'];
?>
        <div class="alert alert-danger p-4 col-8 mx-auto">
            Usuario y/o contraseña incorrectas
        </div>
<?php
        }
?>
    </main>

<?php  include 'includes/footer.php';  ?>