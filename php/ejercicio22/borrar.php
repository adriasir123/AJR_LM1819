<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrar</title>
</head>
<body>
    <?php
        //Abrimos conexión
        $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas en la conexión");
        //Se captura el email del formulario que envió los datos
        $mail = trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));

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



    ?>
</body>
</html>