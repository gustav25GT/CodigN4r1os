<?php
  require_once('conexion.php');



if (isset($_POST['validar'])) {
  # code...
  $apellido = $_POST['apellido'];
  $password = $_POST['password'];
  $email = $_POST['email'];

 $sql = " SELECT * FROM persona WHERE APELLIDO='$apellido' ││ CONTRASEÑA='$password' ││ EMAIL='$email' ";

$validando =  mysql_query($conexion,$sql);

if (mysql_num_rows($validando >0 )) {
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



    # code...
     
     /*echo '
      <script>
       alert(" informe");
        window.location="../informe.php";
      </script>

     ';
  }else{
       echo '
      <script>
        window.location="../../formulario.php";
      </script>

     ';   
  } */





}
  
   
?>