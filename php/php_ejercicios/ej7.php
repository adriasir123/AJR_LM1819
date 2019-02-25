<?php
  //Escriba un año e indique si se trata de un año bisiesto. Realice todas las comprobaciones necesarios
  //en los años.
  
  //MÉTODO PARA COMPROBAR SI EL AÑO ES BISIESTO
  // 1. If the year is evenly divisible by 4, go to step 2. Otherwise, go to step 5.
  // 2. If the year is evenly divisible by 100, go to step 3. Otherwise, go to step 4.
  // 3. If the year is evenly divisible by 400, go to step 4. Otherwise, go to step 5.
  // 4. The year is a leap year (it has 366 days).
  // 5. The year is not a leap year (it has 365 days). 

  $anyo = $_REQUEST['anyo'];
  
  if ($anyo%4 == 0 && $anyo%100 == 0 && $anyo%400 == 0) {
        echo "El año es bisiesto";
      } else {
        echo "El año no es bisiesto";
      }
    } else {
      echo "El año es bisiesto";
    }
	  
  } else {
	  echo "El año no es bisiesto";
	}
?>
