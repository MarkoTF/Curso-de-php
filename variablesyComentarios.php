<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <p>Esto funciona</p>
<?php
//Las variables siempre empuezan con el simbolo de dolar
$nombre='Marco';
$edad=23;
//Se puede incluir la variable dentro una cadena de texto, pero la cadena 
//tiene que estar entre comillas dobles
//
//La diferencia entre print y echo es que print devuelve valor 1 y echo es mas rapido
//Se contate con .
echo "El nombre es $nombre y la edad es " . $edad . '<br>';
//otra manera de concatenar con echo es con comas
echo 'El nombre es ', $nombre, ' y la edad es ', $edad;

?>
</body>
</html>
