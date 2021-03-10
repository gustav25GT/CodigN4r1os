<?php
	
	
   $conexion=mysqli_connect("localhost","root","","personaldb") or die(htmlspecialchars($_SERVER["PHP_SELF"]));
   
   //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

   if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

   
?>
