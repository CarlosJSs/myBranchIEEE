<?php
  session_start();
  include 'conexion.php';

  $correo = $_POST['correo'];
  $contraseña = $_POST['contraseña'];


  //Codigo nuevo para ingresar al sistema 06/02/2023 hora 06:50 pm
  $sql = "SELECT * ";
  $sql .= "FROM usuarios ";
  $sql .= "WHERE correo = '" . $correo . "'";

  $resultados = $conexion->query($sql);

  $fila = mysqli_fetch_assoc($resultados);

  $passwordHash = $fila['contraseña'];

  if(password_verify($contraseña, $passwordHash)){
    $_SESSION['Logueado'] = true;
    header("Location: ../bienvenida.php");
  }else{
    $_SESSION['Logueado'] = false;
    echo '
      <script>
        alert("Usuario no existente, verifique sus datos!");
        window.location  = "../index.php";
      </script>
    ';
    exit();
  }

?>
