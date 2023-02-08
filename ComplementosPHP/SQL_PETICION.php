<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <meta http-equiv="X-UA-Compatible" content="IE=edge">  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="texto">
    <h1 style="text-align: center">Capítulo Estudiantil IEEE Photonics</h1>

    <div class="T3">Sobre Nosotros</div>
    <p class="pC">Somos un grupo que se dedica a la investigación y el desarrollo de proyectos que involucran el uso de procedimientos de manejo y análisis del comportamiento de la luz. Y su aplicación en áreas como la medicina, la robótica, las comunicaciones, etc.</p>
  </div>

<div class="lista-general-th">
  <div class="bloque">
    <div class="titulo">
      Integrantes
    </div>


<?php

  include 'SQL_ACCESS.php';

  echo $sqlData->host_info . "\n";
  $getDoctores="SELECT * FROM prueba";
  $queryResultado = $sqlData->query($getDoctores);
  foreach($queryResultado as $item){
    echo '<div class="unidad">
      <div class="card">
      <img class="card-img-top" src="' . $item['Foto'] . '">
      <div class="card-body">
      <div class="contenido">
      <b>'. $item['Nombre'] .'</b><br>
        <p class="card-text">
          '. $item['Descripcion'] .'
        </p>
        </div>
        <a class="btn btn-primary" href="'. $item['Pagina'] .'"> Conocer más... </a>
        </div>
      </div>
    </div>';
  }
  $sqlData->close();
include "regresar.php"
?>
  </div>
</div>
</body>
</html
