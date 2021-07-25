<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<?php
  /* Declarar constantes
   * El primer parametro es el nombre de la constante. Obligatorio
   * El segundo es el valor(numero, array, string, etc). Obligatorio
   * El tercer es para no requerir que la constante sea mayuscula. Opcional
   *
   * - El nombre de las constantes deben de ir en mayusculas
   * - No deben empezar con el simbolo de dolar como las variables
   * - Define es obligatorio
   * - El ambito, por defecto, es global
   * - No se pueden redefinir
   * - Solo pueden almacenar valores escalares(Valores que no se pueden
   *   dividir en partes mas pequenias)*/
  define('AUTOR', 'Marco');

  //Las constantes no se pueden insetar directamente en un string
  echo 'El autor es: ' . AUTOR;

  echo __FILE__;
?>
</body>
</html>
