
<!doctype html>
<html lang="en">
  <head>
    <title>carrito</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/styleCarrito.css">
    <link rel="shortcut icon" href="../img/agricultura.png" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
        <div class="row">
            <div class="col-lg-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>producto</th>
                            <th>cantidad</th>
                            <th>subtotal</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>                
            </div>
            <div class="col-lg-4">
                <div class="factura">
                    <h4>resumen de compra</h4>
                    <h6>total de la compra</h6>
                    <button class="buy" type="submit">comprar</button>
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