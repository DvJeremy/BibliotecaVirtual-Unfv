<?php
session_start();
include_once "conexion.php";
include_once "articulo.php";
articulo::eliminar($_GET["env"]);
header("Location: cuentaAD.php");