<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/menu.css">
    
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon"/>
    <title>Halcones || <?php echo substr(basename($_SERVER['PHP_SELF']),0,-4); ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top header">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" onclick="$('#navbarCollapse').toggle();">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar primera">


          <p class="usuario">Hola <span>Pedro</span>, tienes <span>12,000</span> Pts.</p>
          <ul class="navbar-nav mt-2 mt-md-0">
            <li class="nav-item active">
              <a class="nav-link logo-workplace" href="#"><img class="logo-wp" src="./img/svg/workplace.svg"></a>
            </li>
            <li class="nav-item img">
              <a class="nav-link" href="#"><img src="./img/svg/heart.svg"><span>1</span></a>
            </li>
            <li class="nav-item img">
              <a class="nav-link" href="#"><img src="./img/svg/cart.svg"><span>1</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Cerrar sesión</a>
            </li>
          </ul>

        </div>
        <div class="navbar segunda">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Catálogo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mi cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ayuda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Mecánica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FAQ's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <div class="form-inline mt-2 mt-md-0 div buscador">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar un producto">
            <button class="btn my-2 my-sm-0" aria-label="Search"></button>
          </div>
        </div>

      </div>
    </nav>
    <div class="contenedor">