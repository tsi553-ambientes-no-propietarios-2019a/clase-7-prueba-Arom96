<?php 
include('common/utils.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<h1>Bienvenido <?php echo $_SESSION['tienda']['usuario']; ?></h1>
	<h1>Nombre De La Tienda: <?php echo $_SESSION['tienda']['nombretienda']; ?></h1>

	<div><a href="php/salir.php">Cerrar sesión</a></div>
</body>
</html>