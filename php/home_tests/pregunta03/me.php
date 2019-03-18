<?php
  //1. Desarrolle un ejercicio que muestre las tablas de multiplicar
  for ($i=1; $i <=10 ; $i++) {
    for ($j=1; $j <=10 ; $j++) {
      $result = $i*$j;
      echo "$i x $j = $result<br/>";
    }
  }
  echo "<br/>";
  echo "<br/>";
  //2. Mostramos los números de los días del 1 a la fecha actual.
  //Ejemplo: si hoy es 11 debe mostrar los números del 1 al 11.
  $today = date("j");
  for ($i=1; $i<=$today ; $i++) {
    echo "Día $i<br/>";
  }
  echo "<br/>";
  echo "<br/>";
  //3. Dado un vector de números positivos desordenado, recórralo y muestre los
  //3 números mayores.
?>
