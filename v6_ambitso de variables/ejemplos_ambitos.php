<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  //Variable de ambito global
  $nombre = "Marco";

  include("otros.php");
  dameOtroNombre();

  function damenombre(){
    //A pesar de llamarse igual que la funcion global, esta se $nombre se considera
    //local y no afecta la variable fuera de los corchetes.
    //No podemos acceder a los que hay fuera de la funcion.
    $nombre="Maria";
  }

  damenombre();
  //Imprime Marco. No podemos acceder a lo que esta dentro de la funcion.
  echo $nombre;


  //=================Para que se sobreescriba==================
  function dameNombre2() {
    //Asi le dices que agarre la variable global
    global $nombre;
    $nombre = "Maria";
  }

  dameNombre2();

  echo "<br>",$nombre;
?>
</body>
</html>
