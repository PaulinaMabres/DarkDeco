<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Example of Bootstrap 3 Responsive Navbar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style media="screen">

	.mr-15{
    margin-right: 13vw;
	}
	</style>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-inverse">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button class="e">
				<a href="###########" class="navbar-brand mr-15 ">Logo/Marca</a> <!-- IDEA: poner directorio de home en ######## -->
			</div>
			<!-- Conjunto de links del nav -->
			<div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class=""><a href="#######">Home</a></li> 					<!-- IDEA: Poner directorio de home en ####### -->
					<li><a href="#">FAQ</a></li>
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
					<li > <a href="######" >Registro</a> 					<!-- IDEA: Poner directorio de REGISTRO en ####### -->
					 </li>
					<li class="active"><a href="######">Login</a> <!-- IDEA: Poner directorio de LOGIN en ####### -->
					</li>
				</ul>
			</div>
		</nav>
	</div>
</body>
</html>
