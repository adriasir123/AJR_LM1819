<?php
  //Realice un formulario con dos campos de tipo texto para dos números y un radio group para dos
  //opciones, "suma" y "resta". Al pulsar el botón "Operar" debe calcular el resultado. Realice el mismo
  //ejemplo con checkbox y con select.
  
  $num1 = trim(htmlspecialchars(strip_tags($_REQUEST["num1"]), ENT_QUOTES, "UTF-8"));
  $num2 = trim(htmlspecialchars(strip_tags($_REQUEST["num2"]), ENT_QUOTES, "UTF-8"));
  $selection = trim(htmlspecialchars(strip_tags($_REQUEST["opeR"]), ENT_QUOTES, "UTF-8"));
    
  if ($selection == "suma") {
	$result = $num1+$num2;
	echo "$num1 + $num2 = $result";
  } else {
	  $result = $num1-$num2;
	  echo "$num1 - $num2 = $result";
	}
?>
