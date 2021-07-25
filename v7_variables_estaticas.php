<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php

function incrementaVariable() {
  /*
   * Le indica que se ejecute solo la primera vez que se llama 
   * a la funcion. Basicamente lo mantienes en memoria, y no se destruira
   * despues de que finalice la funcion.
   * */
  static  $contador=4;
  $contador++;
  echo $contador . "<br>";
}

incrementaVariable();
incrementaVariable();
incrementaVariable();
incrementaVariable();

/*
 * static no permite que la variable sea global,
 * sino que solo se seguira alterando dentre de la
 * funcion que la contiene. Por eso esto no funciona*/
$contador=45;
echo $contador;

incrementaVariable();
?>
</body>
</html>
