<?php
    $numero = 150;

    if ( $numero < 100 ) {
        echo '<img src="imagenes/ok.png">';
    }
    else {
        echo '<img src="imagenes/error.png">';
    }

?>
<hr>
<?php
    $numero = 150;

    if ( $numero < 100 ) {
        $img = 'ok';
    }
    else{
        $img = 'error';
    }
?>
    <img src="imagenes/<?= $img ?>.png">

<hr>
<?php
    $numero = 150;
    $img = 'error';
    if ( $numero < 100 ) {
        $img = 'ok';
    }
?>
<img src="imagenes/<?= $img ?>.png">


