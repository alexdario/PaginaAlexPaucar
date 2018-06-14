<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>INICIO</title>
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/estilos.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body background="imagenes/5.jpg" text="white">
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		<center><h2>Bienvenido</h2>
		</center>
		SOLO UNA PEQUEÑA MUESTRA DE LO Q SOMOS MAGO DE OZ.
<div id="video">
	<video controls preload autoplay>
		<source src="video/MÃ¤go de oz - La costa del silencio (Videoclip Oficial)" type="video/mp4">
	</video>
</div>
</div>
</div>
</div>
	</body>
	</style>
</html>