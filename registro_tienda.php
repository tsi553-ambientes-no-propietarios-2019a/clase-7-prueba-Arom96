<?php 
if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" integrity="" crossorigin="anonymous">

</head>
<body>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	

	<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-sm">
    	<h1>Registro De Tienda</h1>
    	<form action="php/proceso_registro.php" method="post">
  <div class="form-group">
    <label for="inputAddress">Nombre Tienda</label>
    <input type="text" class="form-control" placeholder="Nombre Tienda...">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Usuario</label>
    <input type="text" class="form-control"  placeholder="Nombre Usuario...">
  </div>
  <div class="form-group col-md-6">
      <label for="inputPassword4">Contraseña</label>
      <input type="password" class="form-control"  placeholder="Contraseña...">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Repetir Contraseña</label>
      <input type="password" class="form-control" placeholder="Confirmar Contraseña">
    </div>
  <div class="form-row">
    
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
    </div>
    <div class="col-sm">
    </div>
  </div>
</div>
<script src="js/bootstrap.min.js" integrity="" crossorigin="anonymous"></script>
</body>
</html>