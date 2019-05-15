<?php
include("partials/val_edit-usuario.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar</title>
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
					<h1>Editar datos</h1>
				</div>
				<div class="imagen" >
					<a href="home.php">
						<img src="img/logoNuevo.png" alt="logo" width="100px" height="100px">
					</a>
				</div>
				<div class="card-body">
					<form class="" action="edit-usuario.php" method="post" enctype="multipart/form-data">

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
								<input type="file" class="file-input" name="foto" placeholder="tu foto de perfil" aria-label="tu foto de perfil" aria-describedby="basic-addon1" value="">
								<p><?= $errorFoto ?></p>
							</div>
						</div>

						<div class="form-group">
							<input type="submit" value="Confirmar" class="btn float-right login_btn">
						</div>
						<div class="form-group">
							<a href="home.php"><input type="button" value="Volver" class="btn float-right login_btn"></a>
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
