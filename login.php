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
  <section class="col-md-4 col-xs-6 formulario login">
    <h1>Iniciar Sesión</h1>
    <form class="" action="./home.php" method="post">
      <div class="form-group">
        <input class="form-control" type="text" name="e-mail" value="" placeholder="e-mail">
      </div>
      <div class="form-group">
        <input class="form-control" type="text" name="contraseña" value="" placeholder="contraseña">
      </div>
      <button type="button" class="btn btn-default">Ingresar</button>
      <div class="form-group">
        <span><input type="checkbox" name=""> Recuérdame</span>
      </div>
      <button type="button" class="btn btn-default">Registrate</button>
      <div class="form-group">
        <a href="#">¿Has olvidado tu cuenta?</a>
        <p>¿Eres nuevo en Dark Déco? <a href="#">Regístrate</a></p>
      </div>

      <div class="social-iconos">
        <a class="btn btn-block btn-social btn-twitter">
            <span class="fab fa-twitter"></span> Ingresá con Twitter
        </a>
        <a class="btn btn-block btn-social btn-facebook">
            <span class="fab fa-facebook"></span> Ingresá con Facebook
        </a>
        <a class="btn btn-block btn-social btn-google">
            <span class="fab fa-google"></span> Ingresá con Google
        </a>
      </div>

    </form>
  </section>
  <div class="A col-md-4 col-xs-6">

  </div>

  <?php
  // FOOTER
  // include('partials/footer.php');
  ?>
</body>
</html>
