<header>
  <nav class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button class="e">
      <a href="home.php" class="navbar-brand mr-15 ">Dark Déco</a>
    </div>
    <!-- Conjunto de links del nav -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php">Home</a></li>
        <li><a href="faq.php">FAQ</a></li>
        <li class="dropdown">
          <a data-toggle="dropdown" class="dropdown-toggle" href="#">Otros links <b class="caret"></b></a> <!-- IDEA: Esto es un dropdown dentro del nav por si despues lo usamos, no hace falta completar nada -->
          <ul class="dropdown-menu">
            <li><a href="#">Link Auxiliar0</a></li>
            <li><a href="#">Link Auxiliar1</a></li>
            <li><a href="#">Link Auxiliar2</a></li>
            <li class="divider"></li>
            <li><a href="#">Link Separado0</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Busqueda">
          <span class="input-group-btn">
            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
          </span>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li > <a href="./registro.php" >Registro</a>
         </li>
        <li class="active"><a href="./login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
