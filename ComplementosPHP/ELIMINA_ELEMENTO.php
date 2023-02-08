<?php

if(isset($_POST["submit"])) {
  $Nombre = $_POST['Nombre'];
  include 'SQL_ACCESS.php';

  echo $Nombre . "..." . $sqlData->host_info . "\n <br><br>";
  $getElemento="SELECT * FROM prueba WHERE Nombre='$Nombre'";
  $queryResultado = $sqlData->query($getElemento);

  print_r($queryResultado);
  $item=$queryResultado->fetch_assoc();
  $fotoBorrar= str_replace("https://fotonicaytelecomunicaciones.com/fotos","",$item['Foto']);

  $delElemento="DELETE FROM prueba WHERE Nombre='$Nombre'";
  $sqlData->query($delElemento);
  $sqlData->close();
  
  
  
  include "FTP_ACCESS.php";

  // Check if image file is a actual image or fake image
  echo "y entramos al if :3 <br>";

  if (ftp_delete($ftp,$fotoBorrar)) {
    echo "Borrado correctamente $fotoBorrar <br>";
  } else {
    echo "Ha habido un problema al borrar $fotoBorrar <br>";
  }
  ftp_close($ftp);
}
$_POST=array();

include "regresar.php"
?>
