<?php
    session_start();
    $app = $_SESSION['app'];
    $desarrollador = $_SESSION['desarrollador'];
    include("baseDatos.php");
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $sql = "insert into usuario values( '$correo','$nombre', '$password');";
    // echo $sql;
    $res = $bd->query($sql); //haz la consulta
    // header("Location: menuInicial.php");
    if ($res) {
        header("Location: menuInicial.php");
    } else {
        echo "<h1>no se pudo registrar usuario<h1>";
        echo "<a href='registrarUsuario.php'>click para continuar</a>";
    }
    //echo $sql; //muestra la sentencia sql
    //print_r ($res); //muestra los resultados que tuviste
    //die("muere");
?>

    