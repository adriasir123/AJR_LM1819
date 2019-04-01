<?php
    //FÓRMULAS
    //a= base
    //b= altura
    //Área = a*b
    //Perímetro = 2xa + 2xb

    $base = trim(htmlspecialchars(strip_tags($_REQUEST["base"]), ENT_QUOTES, "UTF-8"));
    $altura = trim(htmlspecialchars(strip_tags($_REQUEST["altura"]), ENT_QUOTES, "UTF-8"));
    $group = trim(htmlspecialchars(strip_tags($_REQUEST["group"]), ENT_QUOTES, "UTF-8"));

    if ($group == "area") {
        $area = $base*$altura;
        echo "<h1>Cálculo del área</h1>";
        echo "La base es $base, y la altura es $altura. El área es $area";
    } else {
        $base2 = $base*2;
        $altura2 = $altura*2;
        $per = $base2+$altura2;
        echo "<h1>Cálculo del perímetro</h1>";
        echo "La base es $base, y la altura es $altura. El perímetro es $per";
    }
    
?>