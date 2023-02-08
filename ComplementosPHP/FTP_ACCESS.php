<?php


$ftp_user_name="puente_fotos@fotonicaytelecomunicaciones.com";
$ftp_user_pass="@erbioTres.";
$ftp_server="ftp.fotonicaytelecomunicaciones.com";

// set up basic connection
$ftp = ftp_connect($ftp_server);
// login with username and password
/*$login_result =*/ ftp_login($ftp, $ftp_user_name, $ftp_user_pass);

function pre_r($arreglo){
  echo "<pre>";
    print_r($arreglo);
  echo "</pre>";
}

function lng_ftp_ls($ftp){
  // get contents of the current directory
  $contents = ftp_mlsd($ftp, ".");
  // output $contents
  pre_r($contents);
}

?>
