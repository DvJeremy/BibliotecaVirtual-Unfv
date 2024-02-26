<?php
include_once "conexion.php";
include_once "articulo.php";
$art = new articulo('',$_POST["titulo"],$_POST["tipo"],$_POST["publi"],$_POST["ident"],$_POST["esp"]);
$art->guardar();
header("Location: cuentaAD.php");