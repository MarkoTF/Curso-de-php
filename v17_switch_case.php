<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  /*
   * Existen dos sintaxis para
   * esta esntructura en PHP
   * */

  $valor=23;

  switch ($valor) {
    case 24:
      echo 'El valor es veinti y cuatro';
      break;
    case 23:
      echo 'El valor es veinti y tres';
      break;
    default:
      echo 'Ninguno';
  }

  //Segunda sintaxis se parece a python
  switch ($valor):
    case 24:
      echo 'El valor es veinti y cuatro';
      break;
    case 23:
      echo 'El valor es veinti y tres';
      break;
    default:
      echo 'Ninguno';
  endswitch;

  //Un uso interesante, para no usar el elseif, seria
  $nombre='marco';
  $contrasenia='12345678';

  switch (true) {
    case $nombre=='marco' && $contrasenia=='12345678':
      echo 'correcto';
      break;
    default:
      echo 'Incorrecto';
  }

?>
</body>
</html>
