<?php 
include('../common/utils.php');
if($_POST) {
	if (isset($_POST['usuario']) && isset($_POST['clave']) && !empty($_POST['usuario']) && !empty($_POST['clave'])) {

		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];

		$sql = "SELECT *
		FROM tienda
		WHERE usuario='$usuario'
		AND clave=MD5('$clave')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['tienda'] = [
						'usuario' => $row['usuario'],
						'id' => $row['id']
					];
					redirect('../inicio.php');
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}

	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../index.php');