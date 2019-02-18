<?php
//form que pida edad y si ha puesto un número, que diga edad, y si no ha puesto un número, error al escribir la edad 
//is_numeric

$edad = $_REQUEST["edad"];
$email = $_REQUEST["email"];

if (is_numeric($edad)) {
    print "Su edad es  $edad";
} else {
    print "Error al introducir la edad";
}

if (filter_var($email, filter_validate_email_email)) {
    print "Email correcto";
} else {
    print "Email incorrecto";
}

?>