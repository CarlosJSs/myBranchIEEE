<?php
include "FTP_ACCESS.php";

$originFile = $_FILES['laFoto']['name'];
echo $originFile . "\n";
$target_dir = "/";
$target_file = $target_dir . basename($originFile);
echo "> file:".$target_file . "\n";
$originFile = $_FILES['laFoto']['tmp_name'];
$uploadOk = 1;
echo $uploadOk . "\n";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
echo $imageFileType . "\n";
echo $originFile . "> <img src=\"" . $originFile . "\">\n";

echo "variables definidas \n";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  echo "y entramos al if :3 <br>";

  if (ftp_put($ftp,$target_file, $originFile,FTP_IMAGE)) {
      echo "Cargado correctamente $file\n";
  } else {
      echo "Ha habido un problema al cargar $file\n";
  }
}
print_r($_FILES);
ftp_close($ftp);
?>
