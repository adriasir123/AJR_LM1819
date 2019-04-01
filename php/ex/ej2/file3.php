<?php
    //FÓRMULA DEL IMC A SEGUIR
    //IMC = peso (kg) / altura² (metros)
    
    //Valoración del IMC
    //imc<18.5 = "BAJO PESO"
    //imc>=18.5 y imc<=24.9 = "NORMAL"
    //imc>=25 y imc<=29.9 = "SOBREPESO"
    //imc>29.9 = "OBESIDAD"

    session_start();
  
    $peso = trim(htmlspecialchars(strip_tags($_REQUEST["peso"]), ENT_QUOTES, "UTF-8"));
    $altura = trim(htmlspecialchars(strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"));


    if (!empty($peso) && !empty($altura) && is_numeric($peso) && is_numeric($altura) && $peso >= 0 && $altura >= 0) {
        //Cáculo de la altura al cuadrado
        $alturaC = $altura*$altura;
        //Cálculo de índice de masa corporal
        $IMC = $peso/$alturaC;
        //Valoración del IMC
        $val = "";
        if ($IMC < 18.5) {
            $val = "CON BAJO PESO";
        } elseif ($IMC >= 18.5 && $IMC <= 24.9) {
            $val = "NORMAL";
        } elseif ($IMC >= 25 && $IMC <= 29.9) {
            $val = "CON SOBREPESO";
        } else {
            $val = "OBESO";
        }

        echo "$_SESSION[nombreUsu], usted pesa $peso KG, y mide $altura M.<br/>Por lo tanto, su IMC (índice de masa corporal) resultante es:<br/>$IMC<br/>Usted está: $val";
    } else {
        echo "Debe introducir unos valores para peso y altura correctos";
    }

?>
