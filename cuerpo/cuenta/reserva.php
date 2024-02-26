<?php
session_start();
include_once "conexion.php";
$ida=$_GET["env"];
$idu=$_SESSION['id'];
$dom=$_GET["direc"];
$sql="insert into reserva(id_usuario,id_articulo,fecha,domicilio) values ($idu,$ida,CURDATE(),$dom)";
$datos=mysqli_query($mysqli,$sql);
echo $ida;
echo $idu;
echo $dom;