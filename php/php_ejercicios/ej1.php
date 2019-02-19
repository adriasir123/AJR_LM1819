<?php
    //Realice un formulario que introduzca dos valores (pies y pulgadas) y los convierta a
    //centímetros. Los pies deben ser un número entero mayor o igual que cero. Las pulgadas
    //son un número entero o decimal mayor o igual que cero. Un pie son doce pulgadas y una
    //pulgada son 2,54 cm.
    
    $converPC = 30.48;
    $converPlC = 2.54;
    $pies = trim(htmlspecialchars(strip_tags($_REQUEST["pies"]), ENT_QUOTES, "UTF-8"));
    $pulgadas = trim(htmlspecialchars(strip_tags($_REQUEST["pulgadas"]), ENT_QUOTES, "UTF-8"));


    if ( (!empty($pies)) && (!empty($pulgadas)) ) {
        if ( (is_numeric($pies)) && (is_numeric($pulgadas)) ) {
            //Apartado de los pies
            if ( (filter_var($pies, FILTER_VALIDATE_INT)) && ($pies >= 0) ) {
                $resultadoPI = $pies*$converPC;
                print "<b>CONVERSIÓN PIES - CENTÍMETROS</b><br/>";
                print "$pies pies son $resultadoPI centímetros<br/><br/>";
            } else {
                print "<b>Error en pies</b><br/>";
                print "Debe introducir un número entero mayor o igual que cero<br/><br/>";
            }
            //Apartado de las pulgadas
            if ($pulgadas >= 0) {
                $resultadoPU = $pulgadas*$converPlC;
                print "<b>CONVERSIÓN PULGADAS - CENTÍMETROS</b><br/>";
                print "$pulgadas pulgadas son $resultadoPU centímetros";
            } else {
                print "<b>Error en pulgadas</b><br/>";
                print "Debe introducir un número mayor o igual que cero";
            }
        } else {
            print "Error, ambos valores deben ser numéricos";
        }
    } else {
        print "Para que todo funcione, debe rellenar TODOS los campos del formulario";
    }

    


?>