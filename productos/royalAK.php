<!doctype html>
<html lang="en">
  <head>
    <title>AgroTheme</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/agricultura.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/selectProducto.css">
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
            <a class="navbar-brand" href="../src/menuInicial.php" >
              <h3>AgroTheme</h3>
            </a>
      
          </div>

          <div class="container-fluid col-md-5">
            <a class="navbar-brand" href="../src/menuInicial.php" >
              <h4>Inicio</h4>
            </a>
            <a class="navbar-brand" href="../src/productos.php" >
              <h4>Productos</h4>
            </a>
            <a class="navbar-brand" href="../src/blog.php" >
              <h4>Blog</h4>
            </a>
            <a class="navbar-brand"  href="../src/contacto.php" >
              <h4>Contacto</h4>
            </a>
          </div>

          <div class="container-fluid col-md-5" >
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search">
              <button class="bton" type="submit">buscar</button>
            </form>
            <a class="navbar-icon" href="#">
              <img class="icono"src="../img/carrito.png" alt="">
            </a>
            <a class="navbar-icon" href="https://www.instagram.com/" target="_blank">
              <img class="icono"src="../img/instagram.png" alt="">
            </a>
            <a class="navbar-icon" href="https://es-la.facebook.com" target="_blank">
              <img class="icono"src="../img/facebook.png" alt="">
            </a>
            <a class="navbar-icon" href="https://twitter.com" target="_blank">
              <img class="icono"src="../img/twitter.png" alt="">
            </a>
          </div>
        </nav>
    </header>
    <section>
        <div class="container-section">
            <div class="fotos">
                <img class="img" src="../img/ak-47.jpg" alt="">
            </div>
            <div class="texto">
                <h1 class="title">Royal AK feminizada</h1>
                <p>$8.000</p>
                <p class="parrafo">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam reiciendis totam vitae quis inventore nihil maxime possimus distinctio quas minima ipsa excepturi officiis expedita ipsam, esse rem itaque velit aperiam!</p>
                        
                <div class="from">
                    <form class="tamanio">
                        <p>tamaño</p>
                        <select value="tamaño" name="producto" maxlength="15" id="producto" required>
                          <option value="3 seeds">3 seeds</option>
                          <option value="5 seeds">5 seeds</option>                          
                        </select>
                        <!-- <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" >
                            seleccionar tamaño
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">pack 3 semillas</a></li>
                            <li><a class="dropdown-item" href="#">pack 5 semillas</a></li>
                        </ul> -->
                        <hr>
                        <p>cantidad</p>
                        <input class="cantidad" type="cantidad" placeholder="ingresar cantidad">  
                        <button type="button" class="btn-carrito ">
                            añadir al carrito
                        </button>                     
                    </form>
 
                </div>                    
            </div>                
        </div>
        <div id="fb-root">
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v14.0" nonce="uxlRtRob"></script>
        <div class="caja-comentario"><label class="lbl-comentar">¡Lista de comentarios!</label></div>
        <div class="fb-comments" data-href="https://jsoza.ilab.cl/DPOW2022-1/sebastian.mardones/productos/sweetZZ.php" data-width="100%" data-numposts="1" data-colorscheme="dark" data-mobile="true"></div>
         </div>
    </section>

    <footer>
        <div class="container-footer">
            <div class="row">
              <div class="col-md-4">
                <h4>Crosby</h4>
                <p>diseño creado con squarepeace</p>
                <img class="icono-footer"src="../img/instagram.png" alt="">
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
                <a class="enlaces" href="../src/menuInicial.php">Tienda</a> 
                <a class="enlaces" href="../src/blog.php">Blog</a> <br>
                <a class="enlaces" href="../src/contacto.php">Contacto</a>
              </div>
            </div>
        </div>
    </footer>
      
   
  </body>
</html>