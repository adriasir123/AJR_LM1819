<?php
    //Escriba su peso en kilos y su altura en centímetros. Calcule su
    //masa corporal. Compruebe que se han rellenado los campos, que
    //sean números y positivos. El índice de masa corporal es
    //peso / altura al cuadrado en metros.
    
    $tabla = trim(htmlspecialchars(strip_tags($_REQUEST["tabla"]), ENT_QUOTES, "UTF-8"));    

    if (!empty($tabla)) {
        if (filter_var($tabla, FILTER_VALIDATE_INT) && $tabla >= 0) {
            for ($c=1; $c<=10; $c++){
                $resul = $tabla*$c;
                echo "$tabla X $c = $resul<br/>";          
            } 
        } else {
            echo "El valor introducido debe ser un número entero y positivo";
        }
    
    } else {
        echo "Rellene el campo por favor";
    }

?>