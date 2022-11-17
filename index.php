<?php

    session_start();
    $_SESSION['app'] = "Agrotheme Shop ";
    $_SESSION['desarrollador'] = 'mmmm';
    header("Location:src/menuInicial.php");

?>

