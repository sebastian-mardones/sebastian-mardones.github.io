
<!doctype html>
<html lang="en">
  <head>
    <title>AgroTheme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/styleMenuInicial.css">
    <link rel="shortcut icon" href="../img/agricultura.png" type="image/x-icon">
    <!-- <script src="../js/funcion.js"></script> -->
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
            <form class="d-flex" action="buscar.php" method="post">
              <input class="form-control me-2" name="buscador" type="search" placeholder="Search">
              <input class="bton" name="buscar" value="buscar" type="submit"></input>
            </form>
            
            <a class="navbar-icon" href="carrito.php">
              <img class="icono" src="../img/carrito.png" alt="">
            </a>
            <a class="navbar-icon" href="https://www.instagram.com" target="_blank">
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

        <div class="container-fluid" id="fondo">
          <div class="row-head">
            <h1>Semillas,sustratos y fertilizantes</h1> <br>
            <button onclick="location.href='productos.php'" class="btn-neon" type="submit" >Comprar ahora</button>
          </div>
        </div>

      </header>


      <section>
        <div class="container-section">
          <div class="fav">
            <h2>Productos Favoritos.</h2>
            <p>nuestra variedad de productos de la mejor calidad, elegidas especificamente para que tu planta tenga un crecimiento vigoroso,sano y sin problemas tanto en interior como en exterior y de facil cuidado.</p>
          </div>
          <div class="row">

            <div class="card col-lg-3">
              <img class="card-img-top" src="../img/sweetzz.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Sweet ZZ</h4>
                <p class="card-precio">$16.000</p>
                <a href="../productos/sweetZZ.php" class="btn btn-success">Ver producto</a>
              </div>
            </div>

          
            <div class="card col-lg-3">
              <img class="card-img-top" src="../img/ligthMix.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Light mix Biobizz</h4>
                <p class="card-precio">$12.000</p>
                <a href="../productos/ligthMix.php" class="btn btn-success">Ver producto</a>
              </div>
            </div>

            <div class="card col-lg-3">
              <img class="card-img-top" src="../img/deeperUnder-1l.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Deeper underground Topcrop</h4>
                <p class="card-precio">$9.100</p>
                <a href="../productos/deeperUnder.php" class="btn btn-success">Ver producto</a>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid" id="info" >
          <div class="row" id="reg">
            <div class="col-lg-12">
            <h2> Para mas informacion:</h2>
            <p>¡No te pierdas nada! Registrate para poder realizar tus compras y enviar tus consultas.</p><br>
            <input class="btn-neon" type="submit" value= "Iniciar sesion" onclick="location.href='iniciarSesion.php'">
            <input class="btn-neon" type="submit" value= "   Registrar   " onclick="location.href='registrarUsuario.php'">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            </div>
          </div>
        </div>
        
      </section>
      <footer>
          <div class="container-footer">
            <div class="row">
              <div class="col-md-4">
                <img class="icono-footer" src="../img/instagram.png" alt="">
                </a>
                <img class="icono-footer" src="../img/facebook.png" alt="">
                </a>
                <img class="icono-footer" src="../img/twitter.png" alt="">
              </div>
              <div class="col-md-4">
                <h4>Desarrolladores del sitio </h4>
                <p>Camila Moya</p>
                <p>Rodrigo Sam</p>
                <p>Cristofer Munoz </p>
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
  </body>
</html>