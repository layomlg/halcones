<?php include('header.php') ?>

<div class="hero">
  <div class="carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/carousel-item.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/carousel-item.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/carousel-item.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="categorias">
    <div class="cat cat-uno">
      <a><p>Categoría destacada 1</p></a>
    </div>
    <div class="cat cat-dos">
      <a><p>Categoría destacada 2</p></a>
    </div>
    <div class="cat cat-tres">
      <a><p>Categoría destacada 3</p></a>
    </div>
  </div>
</div>
<div class="elemento destacado">
  <p class="titulo">Carrito de compra</p>
  <div class="miniatura row">
    <div class="col-6 col-sm-2">
      <div class="art"><a href="./detalle.php"><img src="./img/art.png" alt="Artículo"></a></div>
    </div>
    <div class="col-6 col-sm-2">
      <div class="art"><a href="./detalle.php"><img src="./img/art.png" alt="Artículo"></a></div>
    </div>
    <div class="col-6 col-sm-2">
      <div class="art"><a href="./detalle.php"><img src="./img/art.png" alt="Artículo"></a></div>
    </div>
    <div class="col-6 col-sm-2">
      <div class="art"><a href="./detalle.php"><img src="./img/art.png" alt="Artículo"></a></div>
    </div>
    <div class="col-6 col-sm-2">
      <div class="art"><a href="./detalle.php"><img src="./img/art.png" alt="Artículo"></a></div>
    </div>
    <div class="col-6 col-sm-2">
      <div class="art"><a href="./detalle.php"><img src="./img/art.png" alt="Artículo"></a></div>
    </div>
  </div>
</div>
<div class="elemento">
  <p class="titulo">Productos destacados para ti</p>
  <div class="row">
    <div class="col-6 col-sm-3">
      <div class="art">
        <a href="./detalle.php">
          <img src="./img/art.png" alt="Artículo">
          <div class="art-info">
            <p class="art-titulo">LÁMPARA PROYECTOR DE ESTRELLAS GIRATORIA. REDLEMON®</p>
            <p class="art-mlg">Cod. MLG18162</p>
            <p class="art-pts">1,154 PUNTOS</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-3">
      <div class="art">
        <a href="./detalle.php">
          <img src="./img/art.png" alt="Artículo">
          <div class="art-info">
            <p class="art-titulo">LÁMPARA PROYECTOR DE ESTRELLAS GIRATORIA. REDLEMON®</p>
            <p class="art-mlg">Cod. MLG18162</p>
            <p class="art-pts">1,154 PUNTOS</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-3">
      <div class="art">
        <a href="./detalle.php">
          <img src="./img/art.png" alt="Artículo">
          <div class="art-info">
            <p class="art-titulo">LÁMPARA PROYECTOR DE ESTRELLAS GIRATORIA. REDLEMON®</p>
            <p class="art-mlg">Cod. MLG18162</p>
            <p class="art-pts">1,154 PUNTOS</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-6 col-sm-3">
      <div class="art">
        <a href="./detalle.php">
          <img src="./img/art.png" alt="Artículo">
          <div class="art-info">
            <p class="art-titulo">LÁMPARA PROYECTOR DE ESTRELLAS GIRATORIA. REDLEMON®</p>
            <p class="art-mlg">Cod. MLG18162</p>
            <p class="art-pts">1,154 PUNTOS</p>
          </div>
        </a>
        <div class="art-actions">
          <a class="btn-add">Agregar al carrito</a>
          <a class="btn-fav"><span class="added"></span></a>
        </div>
      </div>
    </div>

  </div>
</div>








<?php include('footer.php') ?>



