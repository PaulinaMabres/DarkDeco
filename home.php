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
  <link rel="stylesheet" href="css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Reenie+Beanie&display=swap" rel="stylesheet"> <!-- IDEA: fuente utilizada una sola vez y solo en home!!!-->
  <title>Dark Déco</title>
</head>
<body>

  <header>
    <?php
    include('partials/header.php');
    ?>
  </header>

  <!-- Contenido del Home -->

    <section id="bienvenida">

      <div class="container-fluid">
        <div class="textoEscrito">
          <p class="line anim-typewriter display-1 fuenteDiferente">DARK DECO | | Home & Decor</p>
        </div>
      </div>

    </section>

    <section id="descripcionDD">

      <div class="container">
        <div class="row pt-5">
          <div class=" mx-auto justify-content-center d-block d-sm-none">
            <p class="col-12 titulo font-weight-bold display-4 text-center text-uppercase">Diseña tu casa como siempre quisiste</p>
            <p class="col-12 text-muted text-center mx-auto h3">  Texto gris para rellenar con cositas que serían de detalle del de arriba</p>
          </div>
          <div class=" mx-auto justify-content-center d-none d-sm-block">
            <p class="col-12 titulo font-weight-bold display-4 text-center text-uppercase" style="max-width:60vw;">Diseña tu hogar como siempre quisiste</p>
            <p class="col-12 text-muted text-center mx-auto h3 font-weight-light" style="max-width: 40vw;"> Camas, sillas, mesas, percheros, armarios, sofás, todo eso y más del estilo contemporáneo</p>
          </div>
        </div>
      </div>

    </section>

    <section id="tarjetas de info">
      <div class="container pb-5">
        <div class="row py-5 justify-content-center">

          <div class="col-md-4 text-center" style="max-width:80vw">
            <i class="fas fa-drafting-compass fa-4x"></i>
            <p class="font-weight-bold h1">Estilo </p>
            <p class="text-muted font-weight-light">En DarkDeco© siempre estamos buscando las nuevas alternativas que presenta el mercado.</p>
          </div>
          <div class="col-md-4  text-center" style="max-width:80vw">
            <i class="fas fa-truck fa-4x"></i>
            <p class="font-weight-bold h1">Envíos <span class="badge badge-secondary">New</span> </p>
            <p class="text-muted font-weight-light"> Hacemos envíos a todo el pais<span style="font-size:11px;">(1)</span> sin cargo adicional<span style="font-size:11px;">(2)</span>.</p>
          </div>
          <div class="col-md-4  text-center" style="max-width:80vw ">
            <i class="fas fa-binoculars fa-4x"></i>
            <p class="font-weight-bold h1">Descubrí</p>
            <p class="text-muted font-weight-light"> En el mundo existe una diversidad enorme de muebles y decoraciones de los que vos pensás.</p>
          </div>
        </div>
        <hr>
      </div>
    </section>

    <section id="seccionesArticulos">
      <div class="container">

        <div class="d-flex flex-row flex-wrap">
          <div class="col-md-8 borde primer_articulo text-right">
            <div class="pt-4"> <span class="h3 font-weight-bold text-uppercase ">Todo para mi habitación</span></div>
            <p class="font-italic">Creadores de sueños.</p>
            <button type="button" class="btn btn-dark borde text-uppercase"> <span class="h6">Comprar ahora</span></button>
          </div>
          <div class="col-md-4 borde segundo_articulo text-right">
            <div class="pt-4"> <span class="h3 font-weight-bold text-uppercase ">Cocina</span></div>
            <p class="font-italic">Hambrientos de estilo.</p>
            <button type="button" class="btn btn-dark borde text-uppercase"> <span class="h6">Comprar ahora</span></button>
          </div>
          <div class="col-md-3 borde tercer_articulo text-right">
            <div class="pt-4"> <span class="h3 font-weight-bold text-uppercase text-white ">Lavabo</span></div>
            <p class="font-italic text-white">Relax</p>
            <button type="button" class="btn btn-dark borde text-uppercase"> <span class="h6">Comprar ahora</span></button>
          </div>
          <div class="col-md-9 borde cuarto_articulo text-right">
            <div class="pt-4"> <span class="h3 font-weight-bold text-uppercase text-white">El outdoor más buscado</span></div>
            <p class="font-italic text-white">Nada como el aire libre.</p>
            <button type="button" class="btn btn-dark borde text-uppercase"> <span class="h6">Comprar ahora</span></button>
          </div>
        </div>

     </div>
    </section>

    <section id="imagen_parallax ">

      <div class="container-fluid mt-5">

        <div class="parallax d-flex justify-content-center align-items-center flex-column ">
          <i class="fas fa-quote-right fa-8x" style="color:#dfe6e9;"></i>
          <p class="display-4 text-white font-italic text-center fuenteDiferente" style="color:#b2bec3;"> Las mejores cosas llegan a aquellos que <span style="color:#dff9fb;text-decoration:line-through;display:inline;">saben esperar</span> <br> <span class="font-weight-bold" style="color:#ff7675">NOS SIGUEN</span> </p>
        </div>
      </div>

    </section>

    <section id="producto_navidad">
      <div class="container">


      <div class="row my-5 text-center">
        <p class="espaciado col-12 text-uppercase">Esta navidad vestí a tu hogar con DarkDeco©</p>
        <p class="titulo col-12 display-4"> Decoraciones especiales por <span style="color:#218c74;">navidad???</span></p>
      </div>
      <div class="d-flex row">
        <div class="col-md-4 d-flex align-items-center">
          <div class="d-flex flex-column ">
            <div class="col-md-12 text-center mb-5">
              <i class="fas fa-book-reader fa-3x text-muted py-2"></i>
              <p class="text-muted h4 ">
                Visitá nuestra sección de navidad que implementamos para vos
              </p>
            </div>
            <div class="col-md-12 text-center">
              <i class="fas fa-tags fa-3x text-muted py-2"></i>
              <p class="text-muted h4">
                Descuentos exclusivos solo para esta sección hasta agotar stock
              </p>
            </div>
          </div>
        </div>
        <div id="imagen" class="col-md-4 navidad">
          <!-- IDEA: Esconder en xs -->
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div class="d-flex flex-column ">
            <div class="col-md-12 text-center mb-5">
              <i class="fas fa-holly-berry fa-3x text-muted py-2"></i>
              <p class="text-muted h4 ">
                Esta navidad ordená y decorá a tu medida
              </p>
            </div>
            <div class="col-md-12 text-center">
              <i class="fas fa-gifts fa-3x text-muted py-2"></i>
              <p class="text-muted h4">
                O realiza un regalo sorpresa a un ser querido
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contadores" class="contadores">
      <div class="container fondo_stats seccionContador">
        <div class=" row ">
          <div class="col-md-3 cajaContador text-center">
            <div class="cajaIcono my-5 d-flex flex-column justify-content-center align-items-center"> <i class="fas fa-users fa-3x"></i> </div>
            <p>
            <span class="contador" style="
              font-size: 400%;">155</span> <span
              style="font-size: 300%;">+</span>
            </p>
            <p class="text-muted text-uppercase">CLIENTES SATISFECHOS</p>
          </div>
          <div class="col-md-3 cajaContador text-center">
            <div class="cajaIcono my-5 d-flex flex-column justify-content-center align-items-center"> <i class="far fa-thumbs-up fa-3x"></i> </div>
            <p>
            <span class="contador" style="
              font-size: 400%;">87</span> <span
              style="font-size: 300%;">%</span>
            </p>
            <p class="text-muted text-uppercase">Satisfacción positiva</p>
          </div>
          <div class="col-md-3 cajaContador text-center">
            <div class="cajaIcono my-5 d-flex flex-column justify-content-center align-items-center"> <i class="fas fa-couch fa-3x"></i> </div>
            <p>
            <span class="contador" style="
              font-size: 400%;">509</span> <span
              style="font-size: 300%;">+</span>
            </p>
            <p class="text-muted text-uppercase">Articulos vendidos</p>
          </div>
          <div class="col-md-3 cajaContador text-center">
            <div class="cajaIcono my-5 d-flex flex-column justify-content-center align-items-center"> <i class="fas fa-coffee fa-3x"></i> </div>
            <p>
            <span class="contador" style="
              font-size: 400%;">30</span> <span
              style="font-size: 300%;">+</span>
            </p>
            <p class="text-uppercase text-muted">Tazas de café</p>
          </div>
        </div>
      </div>
    </section>

    <section id="ultimosProductos" class="ultimosProductos">
      <div class="container-fluid">
        <div class="row my-5 text-center">
          <p class="espaciado col-12 text-uppercase">En DarkDeco©</p>
          <p class="titulo col-12 display-4"> Te traemos los <span style="color:rgb(255, 127, 80);">más destacados</span></p>
        </div>

        <div class="d-flex flex-row flex-wrap overflow-hidden fuenteDiferente">
          <div class="col-md-4 primerDestacado articulosFoto d-flex justify-content-center align-content-center layer1 rapido" style="border: 0px!important;">
            <p class="textoEscondido text-center"><span class="textoOculto1 text-uppercase titulo font-weight-bold display-4">Set sofa cuero</span><br><span class=" textoOculto1 espaciado text-uppercase"> Objeto Destacado</span></p>
          </div>


          <div class="col-md-4 segundoDestacado articulosFoto d-flex justify-content-center align-content-center layer2 " style="border: 0px!important;">
            <p class="textoEscondido text-center"><span class="textoOculto1 text-uppercase titulo font-weight-bold display-4">Cama nórdica</span><br><span class="textoOculto1 espaciado text-uppercase">Objeto Destacado</p>
          </div>

          <div class="col-md-4 tercerDestacado articulosFoto d-flex justify-content-center align-content-center layer3" style="border: 0px!important;">
            <p class="textoEscondido text-center"><span class="textoOculto1 text-uppercase titulo font-weight-bold display-4">Mesa octogonal</span><br><span class="textoOculto1 espaciado text-uppercase">Objeto Destacado</p>
          </div>

          <div class="col-md-4 cuartoDestacado articulosFoto d-flex justify-content-center align-content-center layer4" style="border: 0px!important;">
            <p class="textoEscondido text-center"><span class="textoOculto1 text-uppercase titulo font-weight-bold display-4">Cocina 'nieve'</span><br><span class="textoOculto1 espaciado text-uppercase">Objeto Destacado</p>
          </div>

          <div class="col-md-4 quintoDestacado articulosFoto d-flex justify-content-center align-content-center layer1" style="border: 0px!important;">
            <p class="textoEscondido text-center"><span class="textoOculto1 text-uppercase titulo font-weight-bold display-4">Reloj romano</span><br><span class="textoOculto1 espaciado text-uppercase">Objeto Destacado</p>
          </div>

          <div class="col-md-4 sextoDestacado articulosFoto d-flex justify-content-center align-content-center layer2" style="border: 0px!important;">
            <p class="textoEscondido text-center"><span class="textoOculto1 text-uppercase titulo font-weight-bold display-4">Repisa nórdica</span><br><span class="textoOculto1 espaciado text-uppercase">Objeto Destacado</p>
          </div>
        </div>

      </div>
    </section>

    <section id="visitanos">
      <div class="container my-5">
        <div class=" d-flex flex-column flex-md-row">
          <div class=" col-12 col-md-4 text-center align-self-center">
            <p class="font-weight-light text-uppercase h4">Visitanos</p>
            <p class="text-muted font-weight-light h5">Lunes-Viernes, 11-6</p>
            <p class="text-muted font-weight-light h5">(+54) 11 2345-6789</p>
            <p class="text-muted font-weight-light h5">Av. del Libertador 3800<br> Oficina 3-B</p>
          </div>
          <div class="col-12 col-md-8 align-self-center justify-content-center my-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.327277474324!2d-58.42390398555906!3d-34.572195032704535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb59edd6d0c47%3A0xd83cbb001770616e!2sAv.+del+Libertador+3800%2C+C1425ABX+CABA!5e0!3m2!1ses!2sar!4v1559523710009!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>




<!-- IDEA: Script para el contador de los 'stats' -->

<script type="text/javascript">
$(".contador") .counterUp({
  delay:10,
  time:1000,
})
</script>


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
