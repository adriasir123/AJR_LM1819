<?php
//form que pida edad y si ha puesto un número, que diga edad, y si no ha puesto un número, error al escribir la edad 
//is_numeric


//En $_REQUEST, se almacena el array con los name de cada campo,
//y como valor, el value de cada input. Value por ejemplo
//en un text, sería lo que escribíeramos


$email = $_REQUEST["email"];
$confirm = $_REQUEST["confirm"];
$news = $_REQUEST["news"];


// ! Si lo que viene después se evalúa falso, entramos en el
// if, porque SE CUMPLE LA CONDICIÓN DADA

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email";
} else if (!filter_var($confirm, FILTER_VALIDATE_EMAIL)) {
    print "Error en el email de confirmación";
} else if ($email != $confirm) {
    print "Debe coincidir el email de confirmación";
} else if ($news == -1) {
    print "Debe indicar si desea indicar o no recibir noticias";
} else {
    if ($news == 0) {
        print "Su correo $email no va a recibir noticias";
    } else {
        print "Su correo $email va a recibir noticias";
    }
}




