<?php
$xml = new DOMDocument();
$xml->encoding = 'utf-8';
$xml->xmlVersion = '1.0';
$xml->formatOutput = true;

$principal = $xml->createElement('Libreria');

$libro = $xml->createElement('libro');

$isbn = new DOMAttr('isbn', '112233');
$libro->setAttributeNode($isbn);

$titulo = $xml->createElement('titulo', 'Mi primer Libro');
$libro->appendChild($titulo);

$principal->appendChild($libro);

$xml->appendChild($principal);

$xml->save('libreria.xml');

echo "Fin Librería";

?>
