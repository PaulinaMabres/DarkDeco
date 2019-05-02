<section id="header" class="header">

  <nav class="navbar navbar-expand-sm  navbar-dark bg-dark container-fluid color fixed-top altura ">

    <a class="navbar-brand mt-15 " href="home.php">
      <img src="img/logoNuevoRecortado.png" title="DarkDeco" class="d-inline-block align-top logo" alt="logoDarkD">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto ml-auto text-center">
        <a class="nav-item nav-link active h4 ml-3" href="home.php">Home</a>

        <!-- IDEA: Categorias -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle h4 ml-3 p-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorías
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><center>Sillas</center></a>
            <a class="dropdown-item" href="#"><center>Mesas</center></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"> <center>Promociones</center></a>
          </div>
        </li>

        <a class="nav-item nav-link h4 ml-3" href="faq.php">FAQ</a>
        <a class="nav-item nav-link h4 ml-3" href="#"> Extra </a>
      </div>

      <!-- IDEA: LOGIN collapse -->
      <div class="navbar-nav d-flex flex-row justify-content-around">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-2x"></i>
          </a>

          <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="login.php"><button class="btn btn-outline-success" type="submit">Log in</button></a>
            <a class="dropdown-item" href="register.php"><button class="btn btn-sm btn-outline-secondary" type="submit">No tenes cuenta? Registrate!</button></a>

          </div>
        </li>

      </div>

      <!-- IDEA: CARRITO -->
      <a class=" nav-link text-secondary d-flex justify-content-center mb-2"href="#"><i class="fas fa-shopping-cart fa-2x"></i>
      </a>

      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Buscar</button>
      </form>


    </div>

  </nav>
</section>
