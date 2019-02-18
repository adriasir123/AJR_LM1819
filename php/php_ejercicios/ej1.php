<?php
    //Realice un formulario que introduzca dos valores (pies y pulgadas) y los convierta a
    //centímetros. Los pies deben ser un número entero mayor o igual que cero. Las pulgadas
    //son un número entero o decimal mayor o igual que cero. Un pie son doce pulgadas y una
    //pulgada son 2,54 cm.
    $nombre = trim(htmlspecialchars(strip_tags($_REQUEST["nombre"]), ENT_QUOTES, "UTF-8"));


    if ($nombre != "") {
        print "<p>Su nombre es $nombre</p>";
    }

    if (isset($_REQUEST["opcion"])) {
        print "<p>Opción marcada</p>";
    }


    
    print_r($_REQUEST);
    print_r($_FILES);
?>