<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  /*En php existen dos tipos de arrays
   * - indexsados. Los normales
   * - asociativos. colo los diccionarios de python o objetod de js*/

  //sintaxis 1
  $semana[]='Lunes';
  $semana[]='Martes';
  $semana[]='Miercoles';
  $semana[]='Jueves';
  $semana[]='Viernes';

  //echo $semana[2];

  //sintaxis2
  $semana2=array(23, 52, 7, 12);
  //ordenar array
  sort($semana2);


  //sintaxi3
  $datos=array('Nombre'=>'Juan', 'Apellido'=>'Gomez');
  //Agregar dato
  $datos['Pais'] = 'Mexico';

  echo $datos['Apellido'];

  //Comprobar si es array o no
  if(is_array($datos)) {
    echo 'Si es';
  } else {
    echo 'No es';
  }

  //Recorrer un array como en js
  foreach($datos as $dato => $valor) {
    echo "A $dato le corresponde $valor <br>";
  }

  //tambien se puede recorrer con un for normal
  for($i=0; $i < count($semana); $i++) {
    echo "$semana[$i] <br>";
  }

  //Array multidimensional
  $alimentos=array('Fruta' => array('tropical' => 'kiwi',
				    'Citrico' => 'Madarina'),
		    'Leche',
		    'Carne');


  echo $alimentos['Fruta']['Citrico'];
?>
</body>
</html>
