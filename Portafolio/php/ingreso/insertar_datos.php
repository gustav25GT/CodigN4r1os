<?php
  require_once"conexion.php";
    
htmlspecialchars($_SERVER["PHP_SELF"]);

  if(isset($_POST['register'])){
  		if(strlen($_POST['name']) >= 1 && ($_POST['apellidos']) >= 1 && ($_POST['password']) >= 1 && ($_POST['email']) >= 1 ) {
  				$name = trim($_POST['name']);
          $apellidos = trim($_POST['apellidos']);
  				$password = md5($_POST['password']);
          $cpassword = $_POST['password'];
         

  				$email = trim($_POST['email']);
  				if ($email) {
            # code...
          }

          $password = password_hash('password' , PASSWORD_DEFAULT);


          // CONSULTAR SI EL USUARIO YA SE ENCUENTRA REGISTRADO DENTRO DE LA TABLA
           $sql = " SELECT * FROM persona WHERE APELLIDO='$apellido' ││ CONTRASEÑA='$password' ││ EMAIL='$email' ";

          $validando =  mysql_query($conexion,$sql);

          if ($validando) {
            # code...
            echo '
                <script>
                 alert(" informe");
                  window.location="../informe.php";
                </script>

               ';
          }else{
                 echo " Usuario no autorizado ";
            }



          
          // REGISTRAR USUARIO DENTRO DE LA TABLA
  				$insertar =" INSERT INTO persona(NOMBRE,APELLIDO,CONTRASEÑA,EMAIL) VALUES('$name','$apellidos','$password','$email')";



  				
  			 $resultado = mysqli_query($conexion,$insertar);
  			 		
  			 		if($resultado)	{
  			 				echo ' 

                <script>
  			 							alert(" usuario registrado");
  			 							 window.location="inicio_sesion.php";
  			 				</script>';
  			 		}else {
  			 						echo "Error: " . $consulta . "" . mysqli_error($conexion);
        		}
  			 
  				
  		}else {
                    echo '<script>
                            alert(" Por favor llene los campos ");
                            window.location="../../formulario.php";             
                    </script>';
                    $conexion->close();
            }
  }
       
?>
