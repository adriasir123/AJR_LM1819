<?php
    //Con la función "rand" devuelva un valor entre 1 y 10. Si el valor es menor que 5 debe mostrar el mensaje "El valor .... es menor que 5" en rojo.
    //Si el valor es mayor que 5 debe mostrar el mensaje "El valor ... es mayor que 5" en azul. Si el valor es 5 debe mostrar el mensaje
    //"El valor es 5" en verde.

    $rand = rand(1,10);

    if ($rand < 5) {
      echo "<p style='color:red'>El valor $rand es menor que 5</p>";
    } elseif ($rand > 5) {
      echo "<p style='color:blue'>El valor $rand es mayor que 5</p>";
    } else {
      echo "<p style='color:red'>El valor es 5</p>";
    }
?>
