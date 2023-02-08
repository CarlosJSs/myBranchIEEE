<?php

include "FTP_ACCESS.php";
$originFile = $_FILES['laFoto']['name'];
$target_dir = "/";
$target_file = $target_dir . basename($originFile);
$originFile = $_FILES['laFoto']['tmp_name'];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  echo "y entramos al if :3 <br>";

  if (ftp_put($ftp,$target_file, $originFile,FTP_IMAGE)) {
      echo "Cargado correctamente $originFile <br>";
  } else {
      echo "Ha habido un problema al cargar $originFile <br>";
  }
}
ftp_close($ftp);


$elNombre = $_POST['Nombre'];
$laDescripcion = $_POST['Descripcion'];
$laFotoURL = "https://fotonicaytelecomunicaciones.com/fotos" . $target_file;

include 'SQL_ACCESS.php';

$putElemnto="INSERT INTO prueba (Nombre, Descripcion, Foto)
VALUES ('".$elNombre."','".$laDescripcion."','".$laFotoURL."')";

echo $putElemnto . "<br>";

$sqlData->query($putElemnto);
$sqlData->close();

$_POST=array();

include "regresar.php"

?>
