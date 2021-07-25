<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
//Importar
//include ("v5_flujo_de_dejecucion_importar.php");

//La diferencia con include es que include deja de los demas se sega ejecutando
//mientras que require interrumpe el flujo de ejecucion
//basecamente le dicimos al compilador que se no existe el archivo
//no se siga aejecutando, que se requiere para eso
require ("v5_flujo_de_dejecucion_importar.php");

echo 'Este es un mensaje<br>';

//una funcion se puede llamar antes de declararla
dameDatos();
dameDatos2();
//Funcion
function dameDatos(){
  echo 'Menja en el interior de la funcion<br>';
}

//Ejecutar funcion
dameDatos();

echo 'Segundo mensaje<br>';

dameDatos();
?>
</body>
</html>
