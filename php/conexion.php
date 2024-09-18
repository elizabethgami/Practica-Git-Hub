<?php
function Conectar(){
	$servername = "localhost";
	$database = "retro";
	$username = "root";
	$password = "root";
	// Crear conexión
	$conn = mysqli_connect($servername, $username, $password, $database);
	// Revisar conexión
	if (!$conn) {
		die("Conexión fallida: " . mysqli_connect_error());
	}
	return $conn;
}
function Cerrar($conn){
	mysqli_close($conn);
}
?>