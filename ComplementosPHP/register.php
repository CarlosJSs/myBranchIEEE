<?php

  include './SQL_ACCESS.php';

  $nombre_completo = $_POST['nombre_completo'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];
  //Encriptado de contraseña
  //$contraseña = hash('sha512', $contraseña); forma 1
  $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);

  $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
            VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";

  //Verificar que el correo  no se repita
  $verificar_correo = $sqlData->query("SELECT * FROM usuarios WHERE correo='$correo'");

  if(mysqli_num_rows($verificar_correo) > 0){
    echo '
      <script>
        alert("Este correo ya ha sido registrado");
        window.location = "./index_sesion.php";
      </script>
    ';
    exit();
  }

  //Verificar que el usuario  no se repita
  $verificar_usuario = $sqlData->query("SELECT * FROM usuarios WHERE usuario='$usuario'");

  if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
      <script>
        alert("Este usuario ya ha sido registrado");
        window.location = "./index_sesion.php";
      </script>
    ';
    exit();
  }

  $ejecutar = $sqlData->query($query);

  if($ejecutar){
    echo '
      <script>
        alert("Usuario almacenado exitosamente");
        window.location = "./index_sesion.php";
      </script>
    ';
  }else{
    echo '
      <script>
        alert("Usuario no almacenado");
        window.location = "./index_sesion.php";
      </script>
    ';
  }
  $sqlData->close();

  
?>
