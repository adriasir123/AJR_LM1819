<?php

header('Content-type: text/xml; charset:"iso-8859-1"', true);
echo '<?xml version="1.0" encoding="iso-8859-1"?>';

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "_bdrss", "3306");


$registros = mysqli_query($conexion, "SELECT * FROM noticias order by fecha desc")
    or die("Problemas en la consulta ".mysqli_error($conexion);

    echo '<rss version="2.0">';
        echo '<channel>';
            echo '<title>Noticias IES</title>';
            echo '<link>http://webrssies.000webhostapp.com</link>';
            echo '<language>es</language>';
            echo '<description>Canal de noticias del IES</description>';
            
            while ($reg=mysqli_fetch_array($registros)) {
                echo '<item>';
                echo '<title>'.$reg[titulo].'</title>';
                echo '<title>'.$reg[titulo].'</title>';
                echo '<pubDate>'.$reg[fecha].'</pubDate>';
                echo '<category>'.$reg[categoria].'</category>';
                echo '<description><![CDATA['.$reg[noticia].']]></description>';
                echo '</item>';
            }

        echo '</channel>';
        echo '<rss>';
    mysqli_close($conexion);


    //Abrimos conexión
    //$conexion = mysqli_connect("db4free.net", "adminies", "Adminies", "bdrss_adja_asir")
      //  or die("Problemas en la conexión");

    /*
    //Consulta para comprobar si existe un registro con el email escrito en el formulario enviado
    $registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail='$mail'")
        or die("Problemas en la consulta: ".mysqli_error($conexion));


    if ($reg=mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "DELETE FROM alumnos WHERE mail='$mail'")
            or die("Problemas en la consulta: ".mysqli_error($conexion));
        print "<h3>Alumno Borrado</h3>";
    } else {
        header("Location: inicio.php?error='Email no encontrado'");
    }


    mysqli_close($conexion);

    */
?>