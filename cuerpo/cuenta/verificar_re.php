<?php
	session_start();
	include_once "conexion.php";
	$user = $_POST['user'];
	$tipo = $_POST['tipo'];
	$pass = $_POST['contra'];
	$nomb = $_POST['nombre'];
	$ap = $_POST['apellido'];
	$dni = $_POST['dni'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$sql="select * from cuenta";
	$datos=mysqli_query($mysqli,$sql);
	while($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)){
		if($user==$row['username']){
			$existe="T";
			break;
		}else{
			$existe="F";
		}
	}
	$_SESSION['existe']=$existe;
	if($_SESSION['existe']=='T'){
		header("Location: registrar.php");
	}else{
		$sql="INSERT INTO usuario(id_usuario,nombre,apellido,dni,direccion,correo) VALUES ('','$nomb','$ap','$dni','$direccion','$correo');";
		$datos=mysqli_query($mysqli,$sql);
		$sql="Select id_usuario from usuario order by id_usuario desc limit 1;";
		$datos=mysqli_query($mysqli,$sql);
		while($row=mysqli_fetch_array($datos,MYSQLI_ASSOC)){
			$id=$row['id_usuario'];
		}
		$_SESSION['id']=$id;
		$_SESSION['user']=$user;
		$_SESSION['tipo']=$tipo;
		$sql="INSERT INTO cuenta(username,password,tipo,id_usuario) VALUES ('$user','$pass','$tipo','$id');";
		$datos=mysqli_query($mysqli,$sql);
		header("Location: registrar.php");
		if($_SESSION['tipo']=="ADMINISTRADOR"){
				 header("Location: cuentaAD.php");
			 }else{
				 header("Location: cuenta.php");
			 }
	}
?>