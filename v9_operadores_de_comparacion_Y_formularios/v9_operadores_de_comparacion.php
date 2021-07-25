<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  /*OPERADORES
   * == igaul que
   * === identica que
   * != difiere que
   * <> diferente que
   * < menor que
   * > mayor que
   * <= meno igual que
   * >= mayor igual que*/ 

  $var1=8;
  $var2="8";
  $var3='Marco';

  //=================La diferencia entre el doble y el triple igual===========

  if($var1==$var2) {
    echo "Son iguales";
  } else {
    echo 'No son iguales';
  }

  echo "<br>";

  if($var1===$var3) {
    echo "Son iguales";
  } else {
    echo 'No son iguales';
  }
?>
</body>
</html>
