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
   * Se hereda con extends
   *
   * No puedes heredar de dos clases a la vez, aunque existen
   * metodos para remediar esa limitacion
   *
   * La herencia va en cascada: si heredas de clase tambien heredas lo que
   * esa clase heredo de una clase superior, en caso de que asi haya sido
   * */
  class Camion extends Coche{

    //El constructor de una clase indica el estado inical del objeto
    //debe tener el mismo nombre de la clase
    function Camion() {
      //Con la flecha se refencia o una propiedad o un metodo de la clase
      $this->ruedas=4;
      $this->color='';
      $this->motor=1600;

    }

    //Se puede sobreescribir los metodos
    function estableceColor($color_camion) {
      $this->color=$color_camion;
      echo 'El color de este camion es ' . $this->color . '<br>';
    }

    function arrancar() {
      /*
       * De esta manera le digo a php que primero tiene que ejecutar todo
       * lo que esta en la clase padrey despues que ejecute el nuevo codigo.
       *
       * Es casi como sobreescribir funciones y tambien funciona con
       * propiedades*/
      parent::arrancar();

      echo 'Camion arrancado <br>';

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

  $camion1 = new Camion();
  $camion1->estableceColor('Verde');
  $camion1->arrancar();

?>
</body>
</html>
