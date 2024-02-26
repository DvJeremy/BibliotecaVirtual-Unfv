<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<title>Biblioteca UNFV</title>
	<meta name="Keywords" content="unfv,biblioteca,virtual" />
	<meta name="Description" content="Biblioteca virtual UNFV"/>
	<meta http-equiv="Content-Languaje" content="es"/>
	<meta name="Distribution" content="global" />
	<meta name="Robots" content="all" />
	<link rel="stylesheet" type="text/css" href="../estilos/titulos.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../estilos/botones.css" media="screen"/>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body marginwidth="40px" leftmargin="40px" background="imagenes/fondo.png">
	<?php
	if(isset($_SESSION['verif'])){
		if($_SESSION['verif']=="N"){
		echo "<script>";
		echo "swal('OOPS!!','LOS DATOS INGRESADOS NO FIGURAN DENTRO DEL SISTEMA','error');";
		echo "</script>";
		unset($_SESSION['verif']);
		}
	}
	?>
	<div class="ct">
		<br>
		<div class="cabezera">| <a href="../index3.html">Inicio</a> | Acceder a cuenta</div>
		<br>
	</div>
	<br>
	<div class="titudiv">
		<br>
		<h2>ACCEDER A CUENTA</h2>
		<br>
	</div>
	<div align="center" style="background-color:white">
	<br>
		<form action="verificar.php" method="post"name="cuenta">
		<p><b>INGRESAR USUARIO:</b></p><br>
			<input type="text" placeholder="Escriba usuario" id="usuario" name="usuario" size="50"/><br><br>
		<p><b>INGRESAR CONTRASE&Nacute;A:</b></p><br>
			<input type="password" placeholder="Escriba contrase&ntilde;a" id="contrasena" name="contrasena" size="50"/><br><br>
			<center><input type="submit" value="INGRESAR"></center>
		</form>
	<br><br><br>
	</div>
	<div class="titudiv">
		<br>
		<p><b>No tienes cuenta ? Registrate <a style="color:yellow" href="registrar.php" target="principal">Aqui ahora</a></b></p>
		<br>
	</div>
	<br><br>
	<div class="piediv">
		<br><br>
		Copyright © 2022 - BRJ - CCJ - Universidad Nacional Federico Villarreal - Programacion Aplicada III
		<br><br><br>
	</div>
</body>