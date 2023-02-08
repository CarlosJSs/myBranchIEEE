<?php
  session_start();
  include './SQL_ACCESS.php';

  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

  $echo_peticion="SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
  echo $echo_peticion;
  $validar_login = $sqlData->query("SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");
  $sqlData->close();

  //NOTA: NO SE PUEDE ACCEDER AL ARCHIVO bienvenida.php POR QUE FALTA COMPARAR LA CONTRASEÑA INGRESADA CONTRA LA CONTRASEÑA HASHEADA PARA ENTRAR

  /*if(mysqli_num_rows($validar_login) > 0 ){
    $_SESSION['usuario'] = $correo;
    header("location: ./bienvenida.php");
    exit;
  }else {
    echo '
      <script>
        alert("Usuario no existente, verifique sus datos!");
        window.location  = "./index_sesion.php";
      </script>
    ';
    exit();
  }*/

?>
