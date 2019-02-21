<?php
    //Realice un formulario para solicitar una temperatura y un desplegable que indique que
    //tipo de temperatura es, con las opciones “Celsius” o “Fahrenheit”. Al pulsar el botón
    //convertir convertirá la temperatura en la otra unidad. Deben ser valores decimales, no
    //puede ser inferior a -273,15 ºC o -459,67 ºF. Para obtener el resultado despejar la
    //siguiente fórmula “F - 32 = 1,8 * C”. Presentar el resultado con 2 decimales.

    $temp = trim(htmlspecialchars(strip_tags($_REQUEST["temp"]), ENT_QUOTES, "UTF-8"));
    $se = trim(htmlspecialchars(strip_tags($_REQUEST["select"]), ENT_QUOTES, "UTF-8"));
    
    if (filter_var($temp, FILTER_VALIDATE_FLOAT)) {
        
        if ($se == "celsius" && $temp >= -273.15) {
            $resul = 32+(1.8*$temp);
            echo "El valor $temp en Celsius, son $resul grados en Fahrenheit";
        } else if ($se == "fahrenheit" && $temp >= -459.67) {
            $resul = ($temp-32)/1.8;
            echo "El valor $temp en Fahrenheit, son $resul grados en Celsius";
        } else {
            echo "El valor introducido no puede menor que -273,15 si es Celsius, o menor que -459,67 si
            es Fahrenheit";
        }
    } else {
        echo "El valor introducido no es un decimal";
    }











?>