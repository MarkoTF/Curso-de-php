<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  include ('./v26_modificacion_de_acceso_1.php');


  /*
   * Instacia a clase
   * */
  $renault = new Coche();
  $mazda = new Coche();

  $renault->estableceColor('Rojo');

  //llamada a los atributos y metodos
  $mazda->girar();
  echo 'El mazda tiene ' . $mazda->getRuedas() . ' ruedas <br>';
  //$mazda->set_Color('Verde');

  $camion1 = new Camion();
  $camion1->arrancar();

?>
</body>
</html>
