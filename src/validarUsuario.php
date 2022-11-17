
<?php
    session_start();
    $app = $_SESSION['app'];
    $desarrollador = $_SESSION['desarrollador'];
    $correo = $_POST["correo"];
    //$nombre = $_POST["nombre"];
    $password = $_POST["password"];
    include_once("baseDatos.php");
    $sql = "select nombre, password from usuario where correo = '$correo';";
    $res = $bd->query($sql); //haz la consulta
    if ($res->num_rows !== 0) {
        //quiere decir que el correo esta
        $reg = $res->fetch_array(MYSQLI_ASSOC);
        if ($password == $reg["password"]) {
            header("Location:menuInicial.php");
        } else {

           echo"<h3>su password no corresponde - reingresela</h3>  <br>";
           echo "<a href='iniciarSesion.php'>click para continuar</a>";
        } 
    } else {
         echo"<h3>su correo no existe - desea registrarse</h3> <br>";
         echo "<a href='registrarUsuario.php'>click para registrarse</a>";
    }
    //echo $sql; //muestra la sentencia sql
    //print_r ($res); //muestra los resultados que tuviste
    //die("muere");
?>

