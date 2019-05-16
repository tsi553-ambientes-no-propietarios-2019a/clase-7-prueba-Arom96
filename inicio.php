<?php
	session_start();
	if($_SERVER['SCRIPT_NAME'] == '/clase-7-prueba-Arom96/inicio.php' && !isset($_SESSION['user'])){
		header('Location: index.php');
		exit;
	}
	if($_GET){
		if(isset($_GET['tien'])){
			$nombretienda = $_GET['tien']; 
		
		}
	}
	$connx = mysqli_connect('localhost', 'root', '', 'pruebab1');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  <div class="row">
    <div class="col-sm">
      <h1>Bienvenido: <?php echo $_SESSION['user']['usuario']; ?></h1>
	<p>Nombre de la tienda: <b><?php echo $nombretienda?></b></p>
    </div>
    <div class="col-sm">
    	<h1>Productos Disponibles</h1>
    	<table border ="1">
		<tr>
			<td>ID</td>
			<td>CODIGO</td>
			<td>NOMBRE</td>
			<td>TIPO</td>
			<td>STOCK</td>
			<td>PRECIO</td>
			<td>CODIGO USUARIO</td>
		</tr>
	
	</table>

<br>
    		<form action="nuevo_producto.php" method="post">
    			<div><a href="php/salir.php">Cerrar sesión</a></div>
    			<button type="submit" class="btn btn-primary">Registrar Producto</button>
    		</form>
      
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
	

	
	<script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>
</html>