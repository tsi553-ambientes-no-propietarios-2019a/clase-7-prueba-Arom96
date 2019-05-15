<?php 
session_start();

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

$conn = new mysqli('localhost', 'root', '', 'pruebab1');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

if ($_SERVER['SCRIPT_NAME'] != '/clase-7-prueba-Arom96/index.php' && $_SERVER['SCRIPT_NAME'] != '/clase-7-prueba-Arom96/php/proceso.php' && !isset($_SESSION['tienda'])) {
	redirect($_SERVER["HTTP_HOST"] . 'clase-7-prueba-Arom96/index.php');
} elseif( $_SERVER['SCRIPT_NAME'] == '/clase-7-prueba-Arom96/index.php' && isset($_SESSION['tienda']) ) {

	redirect($_SERVER["HTTP_HOST"] . 'clase-7-prueba-Arom96/inicio.php');
}