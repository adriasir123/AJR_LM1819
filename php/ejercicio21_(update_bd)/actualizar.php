<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>
    <?php
        $identificador = trim(htmlspecialchars($_REQUEST["identificador"], ENT_QUOTES, "UTF-8"));
        $nombre = trim(htmlspecialchars($_REQUEST["nombre"], ENT_QUOTES, "UTF-8"));
        $curso = trim(htmlspecialchars($_REQUEST["curso"], ENT_QUOTES, "UTF-8"));

        $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas de conexión");

        $registros = mysqli_query($conexion, "UPDATE alumnos SET nombre='$nombre', codigocurso=$curso WHERE idAlumno=$identificador")
            or die("Problemas de actualización: ".mysqli_error($conexion));

        echo "<p>Alumno Actualizado</p>";

    ?>
</body>
</html>