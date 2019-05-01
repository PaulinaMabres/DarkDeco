<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>   
 	<?php include('partials/headmaster.php'); ?>
	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
</head>
<body>

<div class="container">
	<?php
		include('partials/header.php');
	?>

	<div class="d-flex justify-content-center h-100 headerEspacio">
		<div class="card">
			<div class="card-header">
				<h4>Registro</h4>
			</div>
			<div class="imagen" >
			 <img src="img/logoNuevo.png" alt="logo" width="100px" height="100px">
			</div>
			<div class="card-body">
				<form>
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
</body>
</html>
