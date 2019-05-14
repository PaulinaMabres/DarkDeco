<?php
include("partials/val_register.php");
?>

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

	<header>
		<?php
		include('partials/header.php');
		?>
	</header>

	<!-- Contenido del Register -->

	<div class="container registro">
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
					<form class="" action="register.php" method="post" enctype="multipart/form-data">
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
								<input type="text" class="form-control" name="nombre" placeholder="tu nombre" aria-label="tu nombre" aria-describedby="basic-addon1" value="<?= $nombre?>">
								<p><?= $errorNombre ?></p>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="apellido" placeholder="tu apellido" aria-label="tu apellido" aria-describedby="basic-addon1" value="<?= $apellido?>">
								<p><?= $errorApellido ?></p>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="email" class="form-control" name="email" placeholder="tu email" aria-label="tu email" aria-describedby="basic-addon1" value="<?= $email?>">
								<p><?= $errorEmail ?></p>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="file" class="file-input" name="foto" placeholder="tu foto de perfil" aria-label="tu foto de perfil" aria-describedby="basic-addon1" value="">
								<p><?= $errorFoto ?></p>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="password" class="form-control" name="contrasenia" placeholder="contrasenia" aria-label="contrasenia" aria-describedby="basic-addon1" value="<?= $contrasenia?>">
								<p><?= $errorContrasenia ?></p>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="password" class="form-control" name="contraseniaConfirmar" placeholder="confirmación de contrasenia" aria-label="confirmación de contrasenia" aria-describedby="basic-addon1" value="<?= $confirmarcontrasenia?>">
								<p><?= '' ?></p> <!-- *Paulina* Le pongo el error vacío porque si no lo tiene, el imput queda más ancho que los demás  -->
							</div>
						</div>
						<div class="form-group">
							<div class="input-group mb-3">
								<input type="text" class="form-control" name="respuestaSecreta" placeholder="Respuesta secreta: nombre de tu escuela primaria" aria-label="respuestaSecreta" aria-describedby="basic-addon1" value="<?= $respuestaSecreta?>">
								<p><?= $errorRespuestaSecreta ?></p>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Confirmar" class="btn float-right login_btn">
						</div>
						<div class="form-group">
							<a href="login.php"><input type="button" value="Volver" class="btn float-right login_btn"></a>
						</div>

					</form>
				</div>
				<!-- <div class="card-footer">
			</div> -->
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
