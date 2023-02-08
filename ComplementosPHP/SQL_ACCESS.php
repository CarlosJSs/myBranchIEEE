<?php
  $host="fotonicaytelecomunicaciones.com";
  $username="fotonica_fotored";
  $password="@erbioTres.";
  $database="fotonica_p";

  /*$host="bghvgszjadv0p0cjja2t-mysql.services.clever-cloud.com";
  $username="uvlbuo01bc05jeuh";
  $password="rTazwwdv20feMztiA9Z6";
  $database="bghvgszjadv0p0cjja2t";*/


  $sqlData=new mysqli($host,$username,$password,$database);
  if($sqlData->connect_errno){
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
?>
