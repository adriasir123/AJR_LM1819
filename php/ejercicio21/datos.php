<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos</title>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "cursophp") 
            or die("Problemas en la conexión");
        $email = trim(htmlspecialchars($_REQUEST["email"], ENT_QUOTES, "UTF-8"));

        $registro = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail = '$email'")
            or die("Problemas en la consulta: ".mysqli_error($conexion));

        if ($reg = mysqli_fetch_array($registro)) {
            ?>
                <form action="actualizar.php" method="post">
                    <input type="hidden" name="identificador" id="identificador"
                        value="<?php echo $reg['idAlumno'];?>">
                    <p>
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre"
                            value="<?php echo $reg['nombre'];?>">
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            value="<?php echo $reg['mail'];?>" readonly> <!-- Para que el campo no se pueda modificar -->
                    </p>
                    <p>
                        <label for="curso">curso</label>
                        <select name="curso" id="curso">
                            <?php
                                $regcursos = mysqli_query($conexion, "SELECT * FROM cursos")
                                    or die("Problemas en la consulta: ".mysqli_error($conexion));
                                while ($regc = mysqli_fetch_array($regcursos)) {
                                    if ($regc['idCurso'] == $reg['codigocurso']) {
                                        echo "<option value='$reg[idCurso]' selected>$regc[nombreCurso]</option>";
                                    } else {
                                        echo "<option value='$reg[idCurso]'>$regc[nombreCurso]</option>";
                                    }
                                }
                            ?>
                        </select>
                    </p>
                    <p>
                        <input type="submit" value="Actualizar">
                    </p>
                </form> 
            <?php
        } else {
            echo "<p>Email no encontrado en la base datos</p>";

        }
    ?>
</body>
</html>