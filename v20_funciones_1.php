<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  /*
   * Los parametros pueden ser por
   * valor o por preferencia
   *
   * Por valor se refiere a una funcion y llamada normal.
   *
   * Por preferencia se refiere a que los parametros pasados a 
   * la funcion guardaran un relacion con las variables
   * de origen, osea que las variables de origen podran ser modificadas
   * */

  function incrementar ($valor) {
    $valor++;
    return $valor;
  }

  function incrementar_referencia (&$valor) {
    $valor++;
    return $valor;
  }

  $numero = 5;

  echo incrementar($numero) . '<br>';
  echo $numero . '<br>';

  echo incrementar_referencia($numero) . '<br>';
  echo $numero;
?>
</body>
</html>
