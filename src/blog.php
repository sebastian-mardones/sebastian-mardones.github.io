<!doctype html>
<html lang="en">
  <head>
    <title>AgroTheme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/agricultura.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styleBlog.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
            <a class="navbar-brand"  href="contacto.php" >
              <h4>Contacto</h4>
            </a>
          </div>

          <div class="container-fluid col-md-5" >
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search">
              <button class="bton" type="submit">buscar</button>
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
    </header>
    <section>
        <div class="container-section">
          <div class="row">
            <div class="blog">
              <img class="img" src="../img/germinacion.jpg" alt="">
              <div class="text">
                <p>04-08-2021</p>
                <h1>¿Como germinar tus semillas?</h1>
                <a class="link" href="../blogs/blog1.php">Leer mas</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="blog">
              <img class="img" src="../img/fertilizanteOrganico.jpg" alt="">
              <div class="text">
                <p>18-05-2022</p>
                <h1>Fertilizantes organicos VS Fertilizantes sinteticos</h1>
                <a class="link" href="">Leer mas</a>
              </div>  
            </div>
          </div>
        </div>

    </section>
    <footer>
        <div class="container-footer">
            <div class="row">
              <div class="col-md-4">
                <h4>Crosby</h4>
                <p>diseño creado con squarepeace</p>
                <img class="icono-footer" src="../img/instagram.png" alt="">
                <img class="icono-footer" src="../img/facebook.png" alt="">
                <img class="icono-footer" src="../img/twitter.png" alt="">
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
      
  </body>
</html>