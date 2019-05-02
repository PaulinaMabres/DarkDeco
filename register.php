<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
 	<?php include('partials/headmaster.php'); ?>
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="container registro">
	<?php
		include('partials/header.php');
	?>

	<div class="d-flex justify-content-center h-100 headerEspacio">
		<div class="card">
			<div class="card-header">
				<h1>Registro</h1>
			</div>
			<div class="imagen" >
				<a href="home.php">
					<img src="img/logoNuevo.png" alt="logo" width="100px" height="100px">
				</a>
			</div>
			<div class="card-body">
				<form>
					<div class="form-group social_login">
						<a class="btn btn-block btn-social btn-twitter">
								<span class="fab fa-twitter"></span> Registrate con Twitter
						</a>
						<a class="btn btn-block btn-social btn-facebook">
								<span class="fab fa-facebook"></span> Registrate con Facebook
						</a>
						<a class="btn btn-block btn-social btn-google">
								<span class="fab fa-google"></span> Registrate con Google
						</a>
						<div class = "space">
								O
						</div>
					</div>

					<div class="form-group">
		        <div class="input-group mb-3">
		          <input type="text" class="form-control" placeholder="tu nombre" aria-label="tu nombre" aria-describedby="basic-addon1">
		        </div>
		      </div>
		      <div class="form-group">
		          <input type="text" class="form-control" placeholder="tu apellido" aria-label="tu apellido" aria-describedby="basic-addon1">
		      </div>
		      <div class="form-group">
		          <input type="email" class="form-control" placeholder="tu email" aria-label="tu email" aria-describedby="basic-addon1">
		      </div>
		      <div class="form-group">
		          <input type="password" class="form-control" placeholder="contraseña" aria-label="contraseña" aria-describedby="basic-addon1">
		      </div>
		      <div class="form-group">
		          <input type="password" class="form-control" placeholder="confirmación de contraseña" aria-label="confirmación de contraseña" aria-describedby="basic-addon1">
		      </div>
					<div class="form-group">
						<input type="submit" value="Confirmar" class="btn float-right login_btn">
					</div>
					<div class="form-group">
						<a href="login.php"><input type="button" value="Volver" class="btn float-right login_btn"></a>
					</div>
				</form>
			</div>
			<div class="card-footer">
			</div>
		</div>
	</div>
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
