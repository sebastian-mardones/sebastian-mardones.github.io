<?php
    //inicar sesion
    session_start();
    //$nombre = $_SESSION['nombre'];
    include('baseDatos.php');
    $sql= 'select correo, contrasena, nombre, telefono, motivoContacto from contacto;';
    $res = $bd->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Ingreso de datos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styleIngresoDatos.css">
    <link rel="shortcut icon" href="../img/agricultura.png" type="image/x-icon">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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

            <div class="container-fluid col-md-5" >
                <form class="d-flex">
                <input class="form-control me-1" type="search" placeholder="Busca tu producto aquí..">
                <button class="bton" type="submit">Buscar</button>
                </form>
                <a class="navbar-icon" href="carrito.php">
                <img class="icono" src="../img/carrito.png" alt="Shop">
                </a>
                <a class="navbar-icon" href="https://www.instagram.com/" target="_blank">
                <img class="icono" src="../img/instagram.png" alt="IG">
                </a>
                <a class="navbar-icon" href="https://es-la.facebook.com" target="_blank">
                <img class="icono" src="../img/facebook.png" alt="FB">
                </a>
                <a class="navbar-icon" href="https://twitter.com" target="_blank">
                <img class="icono" src="../img/twitter.png" alt="TWT">
                </a>  
            </div>
            </nav>
     </header>
      <section>
            <div class="container-fluid" id="fondo">
              <div class="row-head" id="reg">
                    <div class="col-lg-12">
                      <form action="grabaContacto.php" method="post" id=datos>
                        <h3>Ingrese los datos pedidos para realizar consulta</h3>
                        <b><label for="">Correo</label></b><br>
                        <input type="email" name="correo" placeholder="ingrese su email"><br><br>
                        <b><label for="">Contrasena</label></b><br>
                        <input type="password" name="contrasena" placeholder="ingrese su contrasena"><br><br>
                        <b><label for="">Nombre</label></b><br>
                        <input type="text" name="nombre" placeHolder="ingrese su nombre completo"><br><br>
                        <b><label for="">Numero de contacto</label></b><br>      
                        <input type="text" name="telefono" placeHolder="ingrese su telefono de contacto"><br><br>
                        <b><label for="">Motivo del contacto</label></b><br>
                        <input type="text" name="motivoContacto" placeHolder="ingrese su motivo para contactarse"><br><br>
                        <input type="submit" value="Enviar">
                        <input type="reset" value="Eliminar">
                      </form>
                    </div>
              </div>
            </div>           
        </section>

        <footer>
          <div class="container-footer">
            <div class="row">
              <div class="col-md-4">
                <h4>Crosby</h4>
                <p>Diseño creado by SquarePeace</p>
                <a href="#"><img class="icono-footer" src="../img/instagram.png" alt=""></a>
                <a href="#"><img class="icono-footer" src="../img/facebook.png" alt=""></a>
                <a href="#"><img class="icono-footer" src="../img/twitter.png" alt=""></a>
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