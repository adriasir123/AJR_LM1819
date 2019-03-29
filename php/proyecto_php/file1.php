<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "weather_station")
        or die("Problemas de conexión");
    ?>
    <div class="container">
        <h1 class="display-1 text-center">Weather Station</h1>
        <form action="file1.php">
            <!-- CAMPO FECHA DESDE -->
            <div class="form-group row">
                <label for="fechadesde" class="col-sm-2 col-form-label col-form-label-lg">Fecha desde:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control form-control-lg" name="fechadesde" id="fechadesde">
                </div>
            </div>
            <!-- CAMPO FECHA HASTA -->
            <div class="form-group row">
                <label for="fechahasta" class="col-sm-2 col-form-label col-form-label-lg">Fecha hasta:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control form-control-lg" name="fechahasta" id="fechahasta">
                </div>
            </div>
            <!-- TIPO MEDIDA -->
            <div class="form-group row">
                <label for="valor" class="col-sm-2 col-form-label col-form-label-lg">Tipo Medida:</label>
                <div class="col-sm-10">
                    <select class="form-control form-control-lg" name="tipome" id="valor">
                        <?php
                            $tipos = mysqli_query($conexion, "SELECT * FROM variables")
                                or die("Problemas en la consulta: ".mysqli_error($conexion));

                            while ($reg = mysqli_fetch_array($tipos)) {
                                echo "<option value='$reg[cod]'>$reg[desc]</option>";
                            }
                        ?>
                    </select>
                </div>
               
            </div>
            <!-- VALOR MEDIDA -->
            <div class="form-group row">
            <label for="valor" class="col-sm-2 col-form-label col-form-label-lg">Valor Medida:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control form-control-lg" name="valorme" id="valor">
                </div>
            </div>

            <!-- BUSCAR -->
            <div class="form-group row">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Buscar</button>
            </div>
        </form>


        <table class="table table-striped table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Unidad Medida</th>
                    <th scope="col">Sensor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>


        <button type="button" class="btn btn-danger btn-block">Restablecer</button>
        
        <?php
            //$fechadesde = trim(htmlspecialchars(strip_tags($_REQUEST["fechadesde"]), ENT_QUOTES, "UTF-8"));
            //$fechahasta = trim(htmlspecialchars(strip_tags($_REQUEST["fechahasta"]), ENT_QUOTES, "UTF-8"));
            //$tipome = trim(htmlspecialchars(strip_tags($_REQUEST["tipome"]), ENT_QUOTES, "UTF-8"));
            // $valorme = trim(htmlspecialchars(strip_tags($_REQUEST["valorme"]), ENT_QUOTES, "UTF-8"));

            $conexion = mysqli_connect("localhost", "root", "", "cursophp")
            or die("Problemas de conexión");
            mysqli_query($conexion,
            "INSERT INTO alumnos(nombre, mail, codigocurso) VALUES ('$nombre','$email',$curso)") //Se ponen comillas porque son cadenas de texto, y no se le ponen en curso porque se almacenan números
            or die("Problemas en el insert". mysqli_error($conexion));

            mysqli_close($conexion);

            print "<h2>Alumno dado de alta</h2>";






        ?>
    </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>