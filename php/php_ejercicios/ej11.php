<?php
  //ENUNCIADO ANTERIOR
  //Crear una página que convierta una cantidad de dinero en euros a su correspondiente en dólares.
  //Valide el campo.
  
  //Amplíe el ejercicio para insertar un desplegable con posible monedas a cambiar.
  
  $cantidad = $_REQUEST['cant'];
  $equivADOLARES = 0.88;
  
  if (filter_var($cantidad, FILTER_VALIDATE_INT) || filter_var($cantidad, FILTER_VALIDATE_FLOAT)) {
	  $result = $cant*$equivADOLARES;
	  echo "$cant € son $resul $";
  } else {
	  echo "Error, el valor introducido debe de un número entero o decimal<br>Inténtelo de nuevo";
	}
?>
