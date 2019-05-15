<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['nombretienda']) && isset($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['nombretienda']) && !empty($_POST['usuario']) && !empty($_POST['clave'])) {

		$nombretienda = $_POST['nombretienda'];
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		$sql_insert = "INSERT INTO tienda
		(nombretienda, usuario, clave)
		VALUES ('$nombretienda','$usuario', MD5('$clave'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_tienda.php');
	exit;
}