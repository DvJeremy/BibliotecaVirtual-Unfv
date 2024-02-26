<?php
session_start();
unset($_SESSION['verif']);
include_once "conexion.php";
include_once "articulo.php";
$articulos = articulo::obtener();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biblioteca UNFV</title>
	<meta name="Keywords" content="unfv,biblioteca,virtual" />
	<meta name="Description" content="Biblioteca virtual UNFV"/>
	<meta http-equiv="Content-Languaje" content="es"/>
	<meta name="Distribution" content="global" />
	<meta name="Robots" content="all" />
	<link rel="stylesheet" type="text/css" href="../estilos/titulos.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../estilos/botones.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="../estilos/menud.css" media="screen"/>
	<style type="text/css">
	    td{
		font-weight:bold;
		}
		.triangulo {
		 width: 0; 
		 height: 0; 
		 border-left: 120px solid #64343c;
		 border-top: 180px solid transparent;
		 border-bottom: 180px solid transparent; 
		}
		#fil:nth-child(even){
		background-color: #ddd;
		}
		a{color:black}
		#du{background-color:white}
	</style>
	<script src="div.js"></script>
</head>
<body marginwidth="40px" leftmargin="40px" background="imagenes/fondo.png">
	<div class="ct">
		<br>
		<div class="cabezera" style="color:white">| <a href="../index3.html">Inicio</a> | <a href="iniciar_sesion.php">Acceder a cuenta </a>
		| Cuenta</div>
		<br>
	</div>
	<?php
	include_once "perfil.php";
	?>
	<div class="titudiv">
		<br>
		<table>
		<td width="440"></td>
		<td>
		<nav id="menu">
		<ul>
		  <li><a href="#menu">Control de libros v</a>
			<ul>
			  <li><a onclick="ocultardivs('registrar','borrar','vizualisar','reserva')">Agregar articulo</a></li>
			  <li><a onclick="ocultardivs('borrar','vizualisar','registrar','reserva')">Borrar articulo</a></li>
			  <li><a onclick="ocultardivs('vizualisar','registrar','borrar','reserva')">Vizualisar registro de articulos</a></li>
			</ul>
		  </li>
		  <li><a onclick="ocultardivs('reserva','registrar','borrar','vizualisar')">Reserva v</a></li>
		</ul>
		</nav>
		</td>
		</table>
		<br>
	</div><br>
	<div style="width:1270px" id="borrar">
		<br><br>
		<table align="center">
					<tr style="background-color:orange">
						<th>Titulo</th>
						<th>Tipo</th>
						<th>A&ntilde;o de publicación</th>
						<th>Identificador</th>
						<th>Especialidad</th>
					</tr>
					<tr style="background-color:#64343c">
					<td colspan="5"><td>
					</tr>
				<?php foreach ($articulos as $articulo) { ?>
                    <tr id="fil"style="font-size:12px">
						<td><?php echo $articulo["titulo"] ?></td>
                        <td><?php echo $articulo["tipo"] ?></td>
						<td><?php echo $articulo["aa_publicacion"] ?></td>
						<td><?php echo $articulo["identificador"] ?></td>
						<td><?php echo $articulo["especialidad"] ?></td>
                        <td>
                            <a href="eliminar_art.php?env=<?php echo $articulo["id_articulo"] ?>" >
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
		<br><br>
	</div>
	<div style="width:1270px" id="registrar">
		<br><br>
		<form action="registrar_arti.php" method="POST">
                <center><p>
				Titulo: <input name="titulo"  type="text" id="titulo" placeholder="Titulo">
				Tipo: 
				<select name="tipo" id="tipo">
					<option>TESIS</option>
					<option>REVISTA</option>
					<option>LIBRO</option>
					<option>MONGRAFIA</option>
					<option>ARTICULO</option>
				</select>
				A&ntilde;o de publicacion: <input name="publi"  type="text" id="publi" placeholder="a&ntilde;o de publicacion">
				Identificador: <input name="ident"  type="text" id="ident" placeholder="identificador">
				Especialidad: <input name="esp"  type="text" id="esp" placeholder="especialidad">
				<button type="submit">Guardar</button>
				</p></center>
        </form>
		<br><br>
		<table align="center">
					<tr style="background-color:orange">
						<th>Titulo</th>
						<th>Tipo</th>
						<th>A&ntilde;o de publicación</th>
						<th>Identificador</th>
						<th>Especialidad</th>
					</tr>
					<tr style="background-color:#64343c">
					<td colspan="5"><td>
					</tr>
				<?php foreach ($articulos as $articulo) { ?>
                    <tr id="fil"style="font-size:12px">
						<td><?php echo $articulo["titulo"] ?></td>
                        <td><?php echo $articulo["tipo"] ?></td>
						<td><?php echo $articulo["aa_publicacion"] ?></td>
						<td><?php echo $articulo["identificador"] ?></td>
						<td><?php echo $articulo["especialidad"] ?></td>
                    </tr>
                <?php } ?>
            </table>
		<br><br>
	</div>
	<div style="width:1270px" id="vizualisar">
		<br><br>
		<table align="center">
					<tr style="background-color:orange">
						<th>Titulo</th>
						<th>Tipo</th>
						<th>A&ntilde;o de publicación</th>
						<th>Identificador</th>
						<th>Especialidad</th>
					</tr>
					<tr style="background-color:#64343c">
					<td colspan="5"><td>
					</tr>
				<?php foreach ($articulos as $articulo) { ?>
                    <tr id="fil"style="font-size:12px">
						<td><?php echo $articulo["titulo"] ?></td>
                        <td><?php echo $articulo["tipo"] ?></td>
						<td><?php echo $articulo["aa_publicacion"] ?></td>
						<td><?php echo $articulo["identificador"] ?></td>
						<td><?php echo $articulo["especialidad"] ?></td>
                    </tr>
                <?php } ?>
            </table>
		<br><br>
	</div>
	<div style="width:1270px" id="reserva">
		<br><br>
		<center><p>
				Direccion: <input name="direc" type="text" id="direc" placeholder="direccion">
		</p></center>
		<table align="center">
					<tr style="background-color:orange">
						<th>Titulo</th>
						<th>Tipo</th>
						<th>A&ntilde;o de publicación</th>
						<th>Identificador</th>
						<th>Especialidad</th>
					</tr>
					<tr style="background-color:#64343c">
					<td colspan="5"><td>
					</tr>
				<?php foreach ($articulos as $articulo) { ?>
                    <tr id="fil"style="font-size:12px">
						<td><?php echo $articulo["titulo"] ?></td>
                        <td><?php echo $articulo["tipo"] ?></td>
						<td><?php echo $articulo["aa_publicacion"] ?></td>
						<td><?php echo $articulo["identificador"] ?></td>
						<td><?php echo $articulo["especialidad"] ?></td>
                        <td>
                            <a href="reserva.php?env=<?php echo $articulo["id_articulo"] ?>" >
                                Reservar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
		<br><br>
	</div>
	<br><br>
	<script>
	vaciardivs('registrar','borrar','vizualisar','reserva');
	</script>
	<div class="piediv">
		<br><br>
		Copyright © 2022 - BRJ - CCJ - Universidad Nacional Federico Villarreal - Programacion Aplicada III
		<br><br><br>
	</div>
</body>
</html>