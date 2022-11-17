<?php
    session_start();
    $app = $_SESSION['app'];
    $desarrollador = $_SESSION['desarrollador'];
    include("baseDatos.php");
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $motivoContacto = $_POST["motivoContacto"];
    $sql = "insert into contacto values( '$correo', '$contrasena', '$nombre', '$telefono', '$motivoContacto');";
    // echo $sql;
    $res = $bd->query($sql); //haz la consulta
    // header("Location: menuInicial.php");
    if ($res) {
        header("Location: menuInicial.php");
    } else {
        echo "<h1>no se pudo enviar informacion del contacto<h1>";
        echo "<a href='ingresoDatos.php'>click para continuar</a>";
    }
    //echo $sql; //muestra la sentencia sql
    //print_r ($res); //muestra los resultados que tuviste
    //die("muere");
?>
