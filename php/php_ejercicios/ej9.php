<?php
  //Realice un formulario con dos campos de tipo texto para dos números y un radio group para dos opciones, "suma" y "resta". Al pulsar
  //el botón "Operar" debe calcular el resultado. Realice el mismo ejemplo con checkbox y con select.
  $num1 = $_REQUEST['num1'];
  $num2 = $_REQUEST['num2'];  
  $suma = $_REQUEST['suma'];  
  $resta = $_REQUEST['resta'];
    
  if ($suma == suma) {
	$rSuma = $num1+$num2;
	echo "$num1 + $num2 = $rSuma";
  } else {
	  $rResta = $num1-$num2";
	  echo "$num1 - $num2 = $rResta";
	}
?>
