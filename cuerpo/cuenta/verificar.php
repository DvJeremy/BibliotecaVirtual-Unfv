<?php
	session_start();
	include_once "conexion.php";
	$_SESSION['user'] = $_POST['usuario'];
	$pass = $_POST['contrasena'];
	
	$sql="select * from cuenta";
	$datos=mysqli_query($mysqli,$sql);
	 while ($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)) {
		 if($_SESSION['user']==$row['username'] && $pass==$row['password']){
			 $_SESSION['id']=$row['id_usuario'];
			 $_SESSION['tipo']=$row['tipo'];
			 if($_SESSION['tipo']=="ADMINISTRADOR"){
				 $veri="T";
				 break;
			 }else{
				 $veri="F";
				 break;
			 }
		 }else{
			 $veri="N";
		 }
	 }
	 mysqli_close($mysqli);
	 
	 $_SESSION['verif']=$veri;
	 
	 if($_SESSION['verif']=="T"){
		 header("Location: cuentaAD.php");
	 }else if($_SESSION['verif']=="F"){
		 header("Location: cuenta.php");
	 }else if($_SESSION['verif']=="N"){
		 echo $_SESSION['user'];
		 echo $pass;
	 }
?>