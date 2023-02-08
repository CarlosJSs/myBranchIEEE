<?php 
  session_start();
  unset($_SESSION['Logueado']);
  header("Location: ../index.php");
?>