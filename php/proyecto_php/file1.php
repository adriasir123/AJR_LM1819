<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Visualización</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <style>
        body {
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
        $conexion = mysqli_connect("localhost", "root", "", "weather_station")
        or die("Problemas de conexión");
    ?>
    <div class="container" style="background-color: rgb(255,255,255, 0.5)">
        <!-- 
            ############################
                      NAVBAR 
            ############################
        -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Navbar</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- 
            ############################
                     FIN NAVBAR 
            ############################
        -->
        
        <h1 class="display-1 text-center">Weather Station</h1>
        
        <!-- 
            ############################
                     FORMULARIO 
            ############################
        -->
        <form action="file1.php">
            <div class="row">
                <div class="col">

                    <!-- LÍNEA DE FECHA DESDE -->
                    <div class="row" style="background-color: yellow">
                        <div class="col">
                            <div class="row">
                                <label for="fechadesde">Fecha desde:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <input type="date" class="form-control" name="fechadesde" id="fechadesde">
                            </div>
                        </div>
                    </div>

                    <!-- LÍNEA DE FECHA HASTA -->

                    <div class="row" style="background-color: blue">
                        <div class="col">
                            <div class="row">
                                <label for="fechahasta">Fecha hasta:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <input type="date" class="form-control" name="fechahasta" id="fechahasta">
                            </div>
                        </div>
                    </div>

                    <!-- LÍNEA DE TIPO DE MEDIDA -->

                    <div class="row" style="background-color: brown">
                        <div class="col">
                            <div class="row">
                                <label for="tipome">Tipo Medida:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <select class="form-control" name="tipome" id="tipome">
                                    <?php
                                        $tipos = mysqli_query($conexion, "SELECT * FROM variables")
                                            or die("Problemas en la consulta: ".mysqli_error($conexion));

                                        while ($reg = mysqli_fetch_array($tipos)) {
                                            echo "<option value='$reg[id]'>$reg[desc]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- LÍNEA DE VALOR DE MEDIDA -->

                    <div class="row" style="background-color: magenta">
                        <div class="col">
                            <div class="row">
                                <label for="valor">Valor Medida:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <input type="range" class="form-control" name="valorme" id="valor">
                            </div>
                        </div> 
                    </div>

                </div>

                <!-- BOTÓN BUSCAR -->

                <div class="col">
                    <div class="row" style="height:100%;">
                        <button type="submit" class="btn btn-primary btn-block"><img src="search.png" alt="Buscar" style="height:100%;width:25%"></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- 
            ############################
                   FIN FORMULARIO 
            ############################
        -->




        <h1 class="display-1 text-center">Weather Station</h1>
        <form action="file1.php">
            <!-- CAMPOS: FECHA DESDE, FECHA HASTA  -->
            <div class="form-row text-center">
                <div class="form-group col-md-3">
                    <label for="fechadesde">Fecha desde:</label>
                    <input type="date" class="form-control" name="fechadesde" id="fechadesde">
                </div>
                <div class="form-group col-md-3">
                    <label for="fechahasta">Fecha hasta:</label>
                    <input type="date" class="form-control" name="fechahasta" id="fechahasta">
                </div>
                <!-- BUSCAR -->
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary btn-block" style="height:300px">Buscar</button>
                </div>
            </div>

            <!-- TIPO MEDIDA -->
            <div class="form-row text-center">
                <div class="form-group col-md-6">
                    <label for="tipome">Tipo Medida:</label>
                    <select class="form-control" name="tipome" id="tipome">
                        <?php
                            $tipos = mysqli_query($conexion, "SELECT * FROM variables")
                                or die("Problemas en la consulta: ".mysqli_error($conexion));

                            while ($reg = mysqli_fetch_array($tipos)) {
                                echo "<option value='$reg[id]'>$reg[desc]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>

            <!-- VALOR MEDIDA -->
            <div class="form-row text-center">
                <div class="form-group col-md-6">
                    <label for="valor">Valor Medida:</label>
                    <input type="range" class="form-control" name="valorme" id="valor">
                </div>
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