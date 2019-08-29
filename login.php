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
    <div class="contenedor">
      <div class="bg-login"></div>
      <div class="login-wrap">
        <div class="logo">
          <img src="./img/logo.png">
        </div>
        <div class="datos">
          <input type="text" placeholder="Usuario">
          <input type="password" placeholder="Contraseña">
          <input type="button" value="ENVIAR">
          <a>Olvide mi contraseña</a>
        </div>
      </div>
    </div>
    <div class="footer login">
      <div class="row">
        <div class="col-12">
          <p>
            <a>Preguntas Frecuentes</a>
          </p>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/popper.min.js"></script>
  </body>
</html>