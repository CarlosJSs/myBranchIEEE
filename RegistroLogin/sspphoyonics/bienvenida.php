<?php
  session_start();

 if(!isset($_SESSION['Logueado']) || !$_SESSION['Logueado']){
  header("Location: ../index.php");
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
    <p>Bienvenido a mi sesion de usuario</p>
    <div>
      <form action="php/logout.php" method="POST">
        <input type="submit" value="Cerrar Sesion">
      </form>
    </div>
</body>
</html>
