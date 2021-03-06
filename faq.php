<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <?php
  include('partials/headmaster.php');
  ?>
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/faq.css">
  <title>Dark Déco</title>
</head>
<body>
  <header>
    <?php
    include('partials/header.php');
    ?>
  </header>

  <!-- Contenido de FAQ -->
  <div class="container-fluid ayudinHeight d-flex align-items-center"> <?php // IDEA: (Lucas) agrego una clase de min height para arreglar una cosa ?>

    <?php
    include('partials/arrayFAQs.php');
    // var_dump($preguntasFrecuentes);
    ?>

    <div class="accordion row" id="accordionExample">
      <?php
      // Recorro el array generando tarjetas con las preguntas y respuestas
      for ($i=0; $i < count($preguntasFrecuentes); $i++) {
        ?>

        <div class="card col-12">
          <div class="card-header" id="heading<?php echo $i; ?>"class="mb-0" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
            <!-- <i class="estrella fas fa-star"></i> -->
            <i class="icono-preguntas fas fa-home"></i>
            <?php
            echo $preguntasFrecuentes[$i]["pregunta"];
            ?>
          </div>

          <div id="collapse<?php echo $i; ?>" class="collapse hide" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordionExample">
            <div class="card-body">
              <?php
              echo $preguntasFrecuentes[$i]["respuesta"];
              ?>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>

  <footer>
    <?php
    // FOOTER
    include('partials/footer.php');
    ?>
  </footer>

  <?php
  // jqwery scripts
  include('partials/jqweryscripts.php');
  ?>

</body>
</html>
