<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  $num1 = rand(1, 8);
  $expo = pow($num1, 5);
  echo 'El numero aleatorio es: ' . $num1 . '<br>';
  echo 'La potencia del numero aleatorio es: ' . $expo . '<br>';

  /*
   * PHP tiene un casting (conversion de tipos) implisito,
   * lo que facilita la vida
   * */

  $num2 = "3";
  //PHP lo convierte a entero
  $num2 += 2;
  echo 'El resultado del casting es: ' . $num2 . '<br>';

  /*Tambien se puede hacer castings 
   * explicitos
   * */
  $resultado = (int)$num2;

?>
</body>
</html>
