<?php 
	session_start(); 
	if( $_SERVER['SCRIPT_NAME'] == '/clase-7-prueba-Arom96/index.php' && isset($_SESSION['user']) ) {
	header('Location: inicio.php'); 
	exit; 
	}
	if($_GET) {
	if(isset($_GET['mensaje'])) {
		$mensajeDesdeRegistro = $_GET['mensaje'];
		echo $mensajeDesdeRegistro;
	}
}
	if($_POST){
		if(isset($_POST['usuario']) && isset($_POST['clave'])){
		$usuario = $_POST['usuario']; 
		$clave = $_POST['clave'];
		$conn = new mysqli('localhost', 'root', '', 'pruebab1');
		$sql = "SELECT * FROM tienda WHERE usuario = '$usuario' AND  clave= '$clave'";
		$res = $conn->query($sql); 
			if($res->num_rows > 0){
				
				while ($row = $res->fetch_assoc()){
				$_SESSION['user'] = ['usuario'=> $row['usuario'], 'id'=> $row['id']];
				//print_r($_SESSION['user']);
					$NombredeUsuario = $row['usuario'];
					$NombredeTienda = $row['nombretienda'];
					$idUsu = $row['id'];
		
				header("Location: ../inicio.php?nom=$NombredeUsuario&tien=$NombredeTienda&id=$idUsu"); 
				exit;
			}
			}else{
				echo 'Usuario o contraseña incorrecto'; 
			}
		}
	}
?>