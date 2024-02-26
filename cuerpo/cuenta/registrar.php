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
	if(isset($_SESSION['existe'])){
		if($_SESSION['existe']=="T"){
		echo "<script>";
		echo "swal('OOPS!!','ESTA CUENTA YA FIGURA EN EL SISTEMA','error');";
		echo "</script>";
		unset($_SESSION['existe']);
		}
	}
	?>
	<div class="ct">
		<br>
		<div class="cabezera">| <a href="../index3.html">Inicio</a> | <a href="inicio_sesion.php">Acceder a cuenta </a>
		| Cuenta</div>
		<br>
	</div>
	<br>
	<div class="titudiv">
		<br>
		<h2>REGISTRO DE CUENTAS</h2>
		<br>
	</div>
	<div align="center" style="background-color:white">
	<br>
	<form action="verificar_re.php" method="post">
		<p><b>INGRESAR NOMBRES:</b></p><br>
			<input type="text" placeholder="Escriba nombres" name="nombre" id="nombre" size="50"/><br>
		<p><b>INGRESAR APELLIDOS:</b></p><br>
			<input type="text" placeholder="Escriba apellidos" name="apellido" id="apellido" size="50"/><br>
		<p><b>INGRESAR N° DNI:</b></p><br>
			<input type="text" placeholder="Escriba n° de dni" name="dni" id="dni" size="50"/><br>
		<p><b>INGRESAR DIRECCION DE DOMICILIO:</b></p><br>
			<input type="text" placeholder="Escriba direccion de domicilio" name="direccion" id="direccion" size="50"/><br><br>
		<p><b>INGRESAR TIPO DE USUARIO:</b></p><br>
			<select name="tipo" id="tipo">
				<option>SELECCIONAR</option>
				<option>USUARIO EXTERNO</option>
				<option>ESTUDIANTE</option>
				<option>DOCENTE</option>
				<option>ADMINISTRATIVO</option>
			</select><br><br>
		<p><b>INGRESAR CORREO ELECTRONICO:</b></p><br>
			<input type="text" placeholder="Escriba correo" name="correo" id="correo" size="50"/><br>
		<p><b>INGRESAR USUARIO:</b></p><br>
			<input type="text" placeholder="Escriba usuario" name="user" id="user" size="50"/><br>
		<p><b>INGRESAR CONTRASE&Nacute;A:</b></p><br>
			<input type="password" placeholder="Escriba contraseña" name="contra" id="contra" size="50"/><br><br><br>
			<input type="submit" class="botono" value="ENVIAR SOLICITUD DE CUENTA">
			<input type="reset" class="botono" value="BORRAR DATOS"/>
	</form>
	<br><br>
	</div>
	</div>
	<div class="titudiv">
		<b><font size="3">
		<marquee behavior="alternate">&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
		&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
		&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;
		</marquee><br>
		<cite title="Rey Arag&oacute;n,Alfonso V el Magn&aacute;nimo(1394-1458)">Los libros son, entre mis consejeros, los que más me agradan, 
		porque ni el temor ni la esperanza les impiden decirme lo que debo hacer.</cite><br>
		<marquee direction="right" behavior="alternate">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
		&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
		&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
		</marquee>
		</font></b>
	</div>
	<br><br>
	<div class="piediv">
		<br><br>
		Copyright © 2022 - BRJ - CCJ - Universidad Nacional Federico Villarreal - Programacion Aplicada III
		<br><br><br>
	</div>
</body>