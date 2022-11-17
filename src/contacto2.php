<?php
    //iniciar sesion
    session_start();
    //asignar nombre 
    include_once("baseDatos.php");
    $correo = $_POST=["correo"];
    $contrasena = $_POST["contrasena"];
    $telefono = $_POST["telefono"];
    $motivoContacto = $_POST["motivoContacto"];
    //$sql = "insert into contacto values ("$correo", "$contrasena", "$telefono", "$motivoContacto");";
    $res = $bd->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Formulario de contacto</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/styleIndex.css">
</head>
  <body>

    <!-- Header -->
    <header>
        <nav class="navbar">
          <div class="container-fluid col-md-2">
            <a class="navbar-brand" href="menuInicial.php" >
              <h3>AgroTheme</h3>
            </a>
          </div>
          <div class="container-fluid col-md-5">
            <a class="navbar-brand" href="menuInicial.php"  >
              <h4>Inicio</h4>
            </a>
            <a class="navbar-brand" href="productos.php" >
              <h4>Productos</h4>
            </a>
            <a class="navbar-brand" href="blog.php" >
              <h4>Blog</h4>
            </a>
            <a class="navbar-brand"  href="contacto.php">
              <h4>Contacto</h4>
            </a>
          </div>
          <div class="container-fluid col-md-5" >
            <form class="d-flex">
              <input class="form-control me-1" type="search" placeholder="Busca tu producto aquí..">
              <button class="bton" type="submit">Buscar</button>
            </form>
            <a class="navbar-icon" href="carrito.php">
              <img class="icono" src="../img/carrito.png" alt="Shop">
            </a>
            <a class="navbar-icon" href="#">
              <img class="icono" src="../img/instagram.png" alt="IG">
            </a>
            <a class="navbar-icon" href="#">
              <img class="icono" src="../img/facebook.png" alt="FB">
            </a>
            <a class="navbar-icon" href="#">
              <img class="icono" src="../img/twitter.png" alt="TWT">
            </a>  
          </div>
        </nav>
      </header>

      <br>
    <!-- Formulario -->
      <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="contacto2.php" method="post">
                        <label for="">Ingreso correo</label><br>
                        <input type="email" name="correo"><br><br>
                        <label for="">Ingreso contrasena</label><br>
                        <input type="password" name="contrasena"><br><br>
                        <label for="">Ingreso nombre</label><br>
                        <input type="text" name="nomRopa"><br><br>
                        <label for="">Ingreso telefono</label><br>      
                        <input type="text" name="telefono"><br><br>
                        <label for="">Ingrese motivo del contacto</label><br>
                        <input type="text" name="motivoContacto">   <br><br>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Reiniciar">
                    </form>
                </div>
            </div>
        </div>
        <br>


    <!-- Footer de abajo-->
    <footer>
          <div class="container-footer">
            <div class="row">
              <div class="col-md-4">
                <h4>Crosby</h4>
                <p>Diseño creado by SquarePeace</p>
                <a href="#"><img class="icono-footer" src="img/instagram.png" alt=""></a>
                <a href="#"><img class="icono-footer" src="img/facebook.png" alt=""></a>
                <a href="#"><img class="icono-footer" src="img/twitter.png" alt=""></a>
              </div>
              <div class="col-md-4">
                <h4>Desarrolladores del sitio </h4>
                <p>Camila Moya</p>
                <p>Rodrigo Sam</p>
                <p>Cristofer Muñoz</p>
                <p>Sebastian Mardones</p>
              </div>
              <div class="col-md-4" id="caja">
                <a class="enlaces" href="productos.php">Tienda</a> 
                <a class="enlaces" href="blog.php">Blog</a> <br>
                <a class="enlaces" href="">Nuestra Historia</a>
                <a class="enlaces" href="contacto.php">Contacto</a>
              </div>
            </div>
          </div>
      </footer> 

  </body>
</html>
