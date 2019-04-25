<?php

$autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
$titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
$categoria = trim(htmlspecialchars($_REQUEST["categoria"], ENT_QUOTES, "UTF-8"));
$fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
$texto = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));

$conexion = mysqli_connect("localhost", "id9406790_adminies", "Adminies", "_bdrss", "3306");

mysqli_query($conexion, "INSERT INTO noticias(autor,titulo,categoria,noticia)
    VALUES ('$autor','$titulo','$categoria','$noticia')")
    or die("Problemas en el insert ".mysqli_error($conexion);

    echo "CORRECTO";

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