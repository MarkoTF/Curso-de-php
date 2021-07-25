<style>
  .resultado {
    color: #f00;
    font-weight: bold;
    font-size: 32px;
  }
</style>

<?php
  if (isset($_POST['button'])) {

    $numero1 = $_POST['num1'];
    $numero2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = 0;

    //Paso de parametros
    calcular($numero1, $numero2, $operacion);

  }

  function calcular($num1, $num2, $operacion) {
    global $resultado;
    
    if (!strcmp('Suma', $operacion)) {
      $resultado = $num1 + $num2;
    }
    
    if (!strcmp('Resta', $operacion)) {
      $resultado = $num1 - $num2;
    }
    
    if (!strcmp('Multiplicación', $operacion)) {
      $resultado = $num1 * $num2;
    }
    
    if (!strcmp('División', $operacion)) {
      $resultado = $num1 / $num2;
    }
    
    if (!strcmp('Módulo', $operacion)) {
      $resultado = $num1 % $num2;
    }

    echo "<p class='resultado'>El resultado es: $resultado </p>";

  }
?>
