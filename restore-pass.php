<?php
include("partials/val_restore-pass.php");
// var_dump($preguntaSecrectaTexto);
// exit;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Sesión</title>
	<!--Made with love by Mutiullah Samim -->

	<?php
	include('partials/headmaster.php');
	?>
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<!-- <link rel="stylesheet" href="css/home.css"> -->
</head>
<body>

	<header>
		<?php
		include('partials/header.php');
		?>
	</header>


	<div class="container login"  id="restore">

		<div class="d-flex justify-content-center h-100 headerEspacio">
			<div class="card">
				<div class="card-header">
					<h1>Recuperar contraseña</h1>
					<div class="imagen" >
						<a href="home.php">
							<img src="img/logoNuevo.png" alt="logo" width="100px" height="100px">
						</a>
					</div>

				</div>
				<div class="card-body">
					<form class="form-login" action="restore-pass.php" method="post" enctype="multipart/form-data">

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="correo" name="email" value="<?= $email?>">
						</div>

						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-question"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder= '<?=$preguntaSecrectaTexto?>' name="respuestaSecreta" value="<?= $respuestaSecreta?>">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="nueva contraseña" name="contrasenia">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="confirmar contraseña" name="confirmarContrasenia">
						</div>
						<p><?= $error ?></p>
						<div class="form-group">
							<input type="submit" value="Restaurar" class="btn float-right login_btn">
						</div>
						<div class="form-group">
							<a href="login.php"><input type="button" value="Volver" class="btn float-right login_btn"></a>
						</div>
					</form>
				</div>
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
