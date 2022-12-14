<?php
    session_start();
    $app = $_SESSION['app'];
    $desarrollador = $_SESSION['desarrollador'];

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Registro de usuario</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/agricultura.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/registrarUsuario.css">
    <script src="../js/funcion.js"></script>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <header>
            <nav class="navbar">
              <div class="container-fluid col-md-2">
                <a class="navbar-brand" href="menuInicial.php" >
                  <h3>AgroTheme</h3>
                </a>
          
              </div>

              <div class="container-fluid col-md-5">
                <a class="navbar-brand" href="menuInicial.php" >
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

              <div class="container-fluid col-md-2" >
                <!-- <a class="navbar-icon" href="#">
                  <img class="icono" src="../img/carrito.png" alt="">
                </a> -->
                <a class="navbar-icon" href="https://www.instagram.com/" target="_blank">
                  <img class="icono" src="../img/instagram.png" alt="">
                </a>
                <a class="navbar-icon" href="https://es-la.facebook.com" target="_blank">
                  <img class="icono" src="../img/facebook.png" alt="">
                </a>
                <a class="navbar-icon" href="https://twitter.com" target="_blank">
                  <img class="icono" src="../img/twitter.png" alt="">
                </a>            
              </div>
            </nav>
          </header>


 

    <div class="container-fluid" id="fondo">
            <div class="row-head">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <form action="agregarUsuario.php" method="post"><br>
                            <br><br><u><h3>registro de usuario</h3></u> <br>
                            <h5>nombre</h5> 
                            <input type="text" name="nombre" id="nombre" required placeHolder="Ingrese su nombre"> <br><br>
                            <h5>Correo</h5>
                            <input type="email" name="correo" id="correo" required placeHolder="Ingrese su correo"> <br><br>
                            <h5>password</h5>
                            <input type="password" name="password" id="password" required placeHolder="Ingrese su contrase??a"> <br> <br>
                            <input type="submit"  value= "Registrar usuario" >
                          </form>
                          </div>
                  </div>
              </div>
            </div>
          </div>
        


    <footer>
          <div class="container-footer">
            <div class="row">
              <div class="col-md-4">
                <h4>Crosby</h4>
                <p>dise??o creado con squarepeace</p>
                <img class="icono-footer" src="../img/instagram.png" alt="">
                <img class="icono-footer" src="../img/facebook.png" alt="">
                <img class="icono-footer" src="../img/twitter.png" alt="">
              </div>
              <div class="col-md-4">
                <h4>Desarrolladores del sitio </h4>
                <p>Camila Moya</p>
                <p>Rodrigo Sam</p>
                <p>Cristofer Munoz</p>
                <p>Sebastian Mardones</p>
              </div>
              <div class="col-md-4" id="caja">
                <a class="enlaces" href="productos.php">Tienda</a> 
                <a class="enlaces" href="blog.php">Blog</a> <br>
                <a class="enlaces" href="contacto.php">Contacto</a>
              </div>
            </div>
          </div>
      </footer> 
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>