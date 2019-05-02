<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php
  include('partials/headmaster.php');
  ?>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/home.css">
  <title>Dark Déco</title>
</head>
<body>
  <header>


    <?php
    include('partials/header.php');
    ?>
</header>
    <!-- Contenido del Home -->
<div class="container-fluid headerEspacio">
    <div class="jumbotron jumbotron-fluid row">
      <!-- <div class="main row"> -->
        <div class="productos col-12 col-md-3 box-max">      <!-- IDEA: *Lucas* agrego box-max porque se superpone con algo de abajo -->
          <i class="estrella fas fa-star"></i>
          <!-- <h3 class="estrella">&#9733;</h3> -->
          <h2>Promo del mes</h2>
          <img class="img-max" src="img/sillaEamesNegrax2.jpg" alt="Silla Eames 2x1"> <!-- IDEA: *Lucas* agrego img-max porque se superpone con algo de abajo -->
          <p>Silla Eames</p>
          <p>Llevás 2 y pagás 1</p>
          <br>
          <a href="#" class="ver-mas">- Ver más -</a>
        </div>
        <div class="container col-12 col-md-6">
          <h1 class="dark-deco display-4">Dark Déco</h1>
          <p class="lead"><cite><b>"Los detalles no son los detalles, ellos son el diseño"</b><br> Charles Eames</cite></p>
        </div>
        <div class="promociones col-12 col-md-3">
          <i class="estrella fas fa-star"></i>
          <!-- <h3 class="estrella">&#9733;</h3> -->
          <h2>Entrega Gratis*</h2>
          <p>*Te bonificamos la entrega en tu primera compra!</p>
          <a href="#" class="ver-mas">- Consultá la promo del mes -</a>
        </div>
      <!-- </div> -->

    </div>

    <div class="opciones row">
      <div class="col-md-4">
        <i class="estrella-op fas fa-star"></i><br>
        <a href="#">PRODUCTOS</a>
        <p>Explorá nuestra línea de productos para tu casa</p>
      </div>
      <div class="col-md-4">
        <i class="estrella-op fas fa-star"></i><br>
        <a href="#">GALERÍA</a>
        <p>Inspirate con nuestras ambientaciones</p>
      </div>
      <div class="col-md-4">
        <i class="estrella-op fas fa-star"></i><br>
        <a href="#">ASESORAMIENTO</a>
        <p>Recibí asesoramiento online o pedí una cita con alguno de nuestros decoradores.</p>
      </div>
    </div>

    <!-- PARA LUCAS
    <button type="button" class="btn"><i class="redes fab fa-facebook-f"></i></button>
    <button type="button" class="btn"><i class="redes fab fa-google-plus-g"></i></button>
    <button type="button" class="btn"><i class="redes fab fa-twitter"></i></button>
    <button type="button" class="btn"><i class="redes fab fa-linkedin-in"></i></button>
    <button type="button" class="btn"><i class="redes fab fa-dribbble"></i></button> -->

    </div>
    <?php
    // FOOTER
    include('partials/footer.php');

    ?>

  <?php
  // jqwery scripts
  include('partials/jqweryscripts.php');
  ?>
</body>
</html>
