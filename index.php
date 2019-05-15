<?php
include('common/utils.php');
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
    </div>
    <div class="col-sm">
      <form action="php/proceso.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese nombre de usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-primary">Iniciar</button>
  
</form>
<br>
<form action="registro_tienda.php" method="post">
	<button type="submit" class="btn btn-primary">Registrar Tienda</button>
</form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>

<script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>
</html>

