<?php
if (isset($_POST['nombretienda']) && 
		isset($_POST['usuario']) && 
		isset($_POST['clave']) && 
		isset($_POST['confirmarclave'])) {

		$conn = new mysqli('localhost', 'root', '', 'pruebab1');

		$nombretienda = $_POST['nombretienda'];
		$usuario = $_POST['usuario'];
		$clave = $_POST['clave'];
		$confirmarclave = $_POST['confirmarclave'];

		if($clave == $confirmarclave){
    
            $sql_insert = "INSERT INTO tienda
		                (nombretienda,usuario,clave,confirmarclave)
		                VALUES ('$nombretienda','$usuario',MD5('$clave'),MD5('$confirmarclave'))";

		       
		       $resul= $conn->query($sql_insert);

                if ($conn->error) {
                    header('Location: ../registro_tienda.php?error_message=El nombre de usuario ya existe!');
                }else{
                header('Location: ../index.php?error_message=Tienda registrada exitosamente, puede iniciar sesion');
	            exit;
	        }
        }else{
            header('Location: ../registro_tienda.php?error_message=Las contraseñas no coinciden!');
		    exit;
	}
}


?>