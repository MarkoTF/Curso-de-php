<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  /*
   * Creacion de una clase.
   * Por convencion la primera letra siempre
   * tiene que ser mayuscula
   * */
  class Coche {
    //Propiedades (variables)
    var $ruedas; 
    var $color;
    var $motor;

    //El constructor de una clase indica el estado inical del objeto
    //debe tener el mismo nombre de la clase
    function Coche() {
      //Con la flecha se refencia o una propiedad o un metodo de la clase
      $this->ruedas=4;
      $this->color='';
      $this->motor=1600;

    }

    //Metodos (Funciones)
    function arrancar() {
      echo 'Estoy arrancando' . '<br>';
    }

    function girar() {
      echo 'Estoy girando' . '<br>';
    }

    function frenar() {
      echo 'Estoy frenando' . '<br>';
    }

    function estableceColor($color_coche) {
      $this->color=$color_coche;
      echo 'El color de este coche es ' . $this->color . '<br>';
    }
  }
  
  /*
   * Instacia a clase
   * */
  $renault = new Coche();
  $mazda = new Coche();

  $renault->estableceColor('Rojo');

  //llamada a los atributos y metodos
  $mazda->girar();
  echo $mazda->ruedas;

?>
</body>
</html>
