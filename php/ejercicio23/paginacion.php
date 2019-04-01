<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paginación</title>
</head>
<body>
    <?php
        //$mail = trim(htmlspecialchars($_REQUEST["mail"], ENT_QUOTES, "UTF-8"));


        if (isset($_REQUEST['posicion'])) {
            $inicio = $_REQUEST['posicion'];
        } else {
            $inicio = 0;
        }

        
        //Abrimos conexión
        $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas en la conexión");


        $registros = mysqli_query($conexion, 
            "SELECT idAlumno, nombre, mail, codigocurso, nombreCurso 
                FROM alumnos as alum 
                INNER JOIN cursos as cur ON alum.codigocurso = cur.idCurso limit $inicio,2")
            or die("Problemas en la consulta: ".mysqli_error($conexion));
        
        $contador = 0;

        while ($reg = mysqli_fetch_array($registros)) {
            echo "Nombre: " . $reg['nombre']
            . " - Mail: " . $reg['mail']
            . " - Curso: " . $reg['nombreCurso'] . "<br>";
            $contador++;
        }
        if ($inicio == 0) {
            echo "Anteriores";
        } else {
            $anterior = $inicio-2;
            echo "<a href='paginacion.php?posicion=$anterior'>Anteriores</a>";
        }

        if (($inicio + $contador)
            < mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM alumnos"))) {
                $siguiente = $inicio+2;
                echo "<a href='paginacion.php?posicion=$siguiente'>Siguientes</a>";
        } else {
            echo "Siguientes";
        }

        mysqli_close($conexion);
    ?>
</body>
</html>