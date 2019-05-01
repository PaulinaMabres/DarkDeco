<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Iniciar Sesión</title>
   <!--Made with love by Mutiullah Samim -->

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">

</head>
<body>

<div class="container">

	<?php
		include('partials/header.php');
	?>

	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h4>Iniciar Sesión</h4>
				 <div class="imagen" >
				 	<img src="img/logoNuevo.png" alt="logo" width="100px" height="100px">
				 </div>

			</div>
			<div class="card-body">
				<form action="#" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="usuario">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="contraseña">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Recuérdame
					</div>
					<div class="form-group">
						<input type="submit" value="Ingresar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					No tenés cuenta?<a href="register.php">Registrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Olvidaste tu contraseña?</a>
				</div>

				<div class="d-flex justify-content-start social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
	      </div>

			</div>
		</div>
	</div>


</div>

<?php
	// FOOTER
	include('partials/footer.php');
?>

</body>
</html>
