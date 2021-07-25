<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
  
  <style>
    .resaltar{
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
<?php
  /*
   * Hay que intercambiar los tipos de comillas para que
   * funcione*/
  echo "<p class='resaltar'>Esto es un ejempli de frase</p>";
  /*
   * Tambien se puede hacer lo que se conoce como un escape de caracteres,
   * que significa que eliminara cualquier significado especia y tomara
   * el caracter de manera literal*/
  echo "<p class=\"resaltar\">Esto es un ejempli de frase</p>";

  //========================Comparar cadenas=============================
  $cad1='Hola';
  $cad2="hola";

  /*
   * Esta funcion toma en cuenta las mayusculas y 
   * minusculas*/
  $result = strcmp($cad1,$cad2); //Devuelve uno -1 si no son iguale y 0 si lo son
  echo "<p>$result</p>";


  $cad1='Hola';
  $cad2="hola";

  /*
   * Esta funcion NO toma en cuenta las mayusculas y 
   * minusculas*/
  $result = strcasecmp($cad1,$cad2); //Devuelve uno -1 si no sin iguale y 0 si lo son
  echo "<p>$result</p>";
?>
</body>
</html>
