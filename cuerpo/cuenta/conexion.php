
<?php
$host = "localhost";
$usuario = "root";
$contrasenia = "";
$base_de_datos = "biblioteca_virtual";
$mysqli = mysqli_connect($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
