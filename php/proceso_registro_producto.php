<?php

if (isset($_POST['id_fk']) && 
	isset($_POST['codigo'])&&
	isset($_POST['nombre']) && 
	isset($_POST['tipo']) && 
	isset($_POST['stock']) &&
	isset($_POST['precio'])) {

		$conn = new mysqli('localhost', 'root', '', 'pruebab1');

		$id_fk = $_POST['id_fk'];
		$codigo = $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$stock = $_POST['stock'];
		$precio = $_POST['precio'];
    
            $sql_insert = "INSERT INTO producto
		                (id_fk,codigo,nombre,tipo,stock,precio)
		                VALUES ('$id_fk','$codigo','$nombre','$tipo','$stock','precio')";

		       
		       $resul= $conn->query($sql_insert);

                if ($conn->error) {
                    echo 'Ocurrió un error ' . $conn->error;
                }else{
                header('Location: ../nuevo_producto.php?error_message=Producto Registrado, puede regisrar otro producto');
	            exit;
	        }
}