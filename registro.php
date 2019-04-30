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
  <?php
  include('partials/header.php');
  ?>
  <div class="B col-md-4">

  </div>
  <section class="col-md-4 col-xs-6 formulario registro">
    <h1>Registro</h1>
    <form class="" action="./home.php" method="post">
      <div class="form-group">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="tu nombre" aria-label="tu nombre" aria-describedby="basic-addon1">
        </div>
      </div>
      <div class="form-group">
          <input type="text" class="form-control" placeholder="tu apellido" aria-label="tu apellido" aria-describedby="basic-addon1">

      </div>
      <div class="form-group">

          <input type="text" class="form-control" placeholder="tu email" aria-label="tu email" aria-describedby="basic-addon1">
      </div>
      <div class="form-group">

          <input type="text" class="form-control" placeholder="contraseña" aria-label="contraseña" aria-describedby="basic-addon1">
      </div>
      <div class="form-group">

          <input type="text" class="form-control" placeholder="confirmación de contraseña" aria-label="confirmación de contraseña" aria-describedby="basic-addon1">
      </div>

      <div class="form-group">
      </div>

      <button type="button" class="btn btn-default">Registrate</button>
      <div class="form-group">
      </div>

      <div class="social-iconos">
        <a class="btn btn-block btn-social btn-twitter">
            <span class="fab fa-twitter"></span> Registrate con Twitter
        </a>
        <a class="btn btn-block btn-social btn-facebook">
            <span class="fab fa-facebook"></span> Registrate con Facebook
        </a>
        <a class="btn btn-block btn-social btn-google">
            <span class="fab fa-google"></span> Registrate con Google
        </a>
      </div>


    </form>
  </section>
  <div class="A col-md-4 col-xs-6">

  </div>

  <?php
  // FOOTER
  //include('partials/footer.php');
  ?>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2"></script>
</body>
</html>
