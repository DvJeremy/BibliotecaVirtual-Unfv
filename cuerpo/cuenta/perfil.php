<?php
	include_once "conexion.php";
	$sql="select * from usuario";
	$datos=mysqli_query($mysqli,$sql);
	while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)){
		if($_SESSION['id']==$row["id_usuario"]){
			$nomb=$row["nombre"];
			$ap=$row["apellido"];
			$dni=$row["dni"];
			$direccion=$row["direccion"];
			$correo=$row["correo"];
		}
	}
		echo "<div class='titudiv'>";
		echo "<br>";
		echo "<h2>BIENVENID@ >>>>>>> USUARIO >>>>>> ";
		echo $_SESSION['user'];
		echo " </h2>";
		echo "<br>";
	    echo "</div >";
		echo "<div style='background-color:orange'>";
		echo "<br>";
		echo "<table align='center'>";
		echo "<tr>";
		echo "<td rowspan='7'><div class='triangulo'></td>";
		echo "<td rowspan='7'><img src='../imagenes/perfil.png'></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td width='400px' >Nombre : ";
		echo $nomb;
		echo " </td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Apellido : ";
		echo $ap;
		echo " </td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>DNI : ";
		echo $dni;
		echo " </td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Direccion : ";
		echo $direccion;
		echo " </td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Correo : ";
		echo $correo;
		echo " </td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td>Tipo de usuario: ";
		echo $_SESSION['tipo'];
		echo " </td>";
		echo "</tr>";
		echo "</table>";
		echo "<br>";
		echo "</div>";
?>