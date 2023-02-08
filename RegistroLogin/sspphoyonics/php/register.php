<?php

  include 'conexion.php';

  $nombre_completo = $_POST['nombre_completo'];
  $correo = $_POST['correo'];
  $usuario = $_POST['usuario'];
  $contraseña = $_POST['contraseña'];
  //Encriptado de contraseña
  //$contraseña = hash('sha512', $contraseña); forma 1
  $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

  $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña)
            VALUES ('$nombre_completo','$correo','$usuario','$contraseña')";

  //Verificar que el correo  no se repita
  $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

  if(mysqli_num_rows($verificar_correo) > 0){
    echo '
      <script>
        alert("Este correo ya ha sido registrado");
        window.location = "../index.php";
      </script>
    ';
    exit();
  }

  //Verificar que el usuario  no se repita
  $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

  if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
      <script>
        alert("Este usuario ya ha sido registrado");
        window.location = "../index.php";
      </script>
    ';
    exit();
  }

  $ejecutar = mysqli_query($conexion, $query);

  if($ejecutar){
    echo '
      <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.php";
      </script>
    ';
  }else{
    echo '
      <script>
        alert("Usuario no almacenado");
        window.location = "../index.php";
      </script>
    ';
  }

  mysqli_close($conexion);
?>
