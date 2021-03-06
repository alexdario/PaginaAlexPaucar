<?php session_start(); ?>
<html>
	<head>
		<title>FORMULARIO DE REGISTRO</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body background="imagenes/2.jpg" text="white">
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Registro</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="fullname">Nombre Completo</label>
		    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <center><input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico"></center>
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <center><input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a"></center>
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <center><input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a"></center>
		  </div>

		  <button type="submit" class="btn btn-default">Registrar</button>
		</form>
		</div>
		</div>
		</div>

		<script src="js/valida_registro.js"></script>
	</body>
</html>