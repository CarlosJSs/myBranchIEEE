<?php
  session_start();

  if(!isset($_SESSION['usuario'])){
    echo '
      <script>
        alert("Porfavor inicie sesion para acceder al sistema");
      </script>
    ';
    header("location: index.php");
    die();
    session_destroy();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SSP-AES-Bienvenida</title>
</head>
<body>
    <p>Bienvenido a mi sesion de usaurio</p>
</body>
</html>