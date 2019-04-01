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
    <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
    <style>
        body {
            background-color: #000000;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1600 800'%3E%3Cg %3E%3Cpolygon fill='%23220000' points='1600 160 0 460 0 350 1600 50'/%3E%3Cpolygon fill='%23440000' points='1600 260 0 560 0 450 1600 150'/%3E%3Cpolygon fill='%23660000' points='1600 360 0 660 0 550 1600 250'/%3E%3Cpolygon fill='%23880000' points='1600 460 0 760 0 650 1600 350'/%3E%3Cpolygon fill='%23A00' points='1600 800 0 800 0 750 1600 450'/%3E%3C/g%3E%3C/svg%3E");
            background-attachment: fixed;
            background-size: cover;
            font-family: 'Concert One', cursive;
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
            <a class="navbar-brand" href="file1.php">Inicio</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link3</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Escribe aquí..." aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <!-- 
            ############################
                     FIN NAVBAR 
            ############################
        -->
        
        <h1 class="display-1 text-center">Estación Meteorológica</h1>
        
        <!-- 
            ############################
                     FORMULARIO 
            ############################
        -->
        <form action="file1.php">
            <div class="row">
                <div class="col">

                    <!-- LÍNEA DE FECHA DESDE -->
                    <div class="row" style="background-color: rgb(239,0,0, 0.6)">
                        <div class="col">
                            <div class="text-center">
                                <label for="fechadesde">Fecha desde:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <input type="date" class="form-control form-control-lg" name="fechadesde" id="fechadesde">
                            </div>
                        </div>
                    </div>

                    <!-- LÍNEA DE FECHA HASTA -->

                    <div class="row" style="background-color: rgb(239,0,0, 0.6)">
                        <div class="col">
                            <div class="text-center">
                                <label for="fechahasta">Fecha hasta:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <input type="date" class="form-control form-control-lg" name="fechahasta" id="fechahasta">
                            </div>
                        </div>
                    </div>

                    <!-- LÍNEA DE TIPO DE MEDIDA -->

                    <div class="row" style="background-color: rgb(239,0,0, 0.6)">
                        <div class="col">
                            <div class="text-center">
                                <label for="tipome">Tipo Medida:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <select class="form-control form-control-lg" name="tipome" id="tipome">
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

                    <div class="row" style="background-color: rgb(239,0,0, 0.6)">
                        <div class="col">
                            <div class="text-center">
                                <label for="valor">Valor Medida:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <input type="range" class="form-control form-control-lg" name="valorme" id="valor">
                            </div>
                        </div> 
                    </div>

                </div>

                <!-- BOTÓN BUSCAR -->

                <div class="col">
                    <div class="row" style="height:100%;">
                        <button type="submit" class="btn btn-primary btn-block btn-warning"><img src="search.png" alt="Buscar" style="height:100%;width:30%"></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- 
            ############################
                   FIN FORMULARIO 
            ############################
        -->

        <!-- 
            ############################
                     CÓDIGO PHP 
            ############################
        -->
        <?php
            if (!empty($_REQUEST)) {
                //$fechadesde = trim(htmlspecialchars(strip_tags($_REQUEST["fechadesde"]), ENT_QUOTES, "UTF-8"));
                //$fechahasta = trim(htmlspecialchars(strip_tags($_REQUEST["fechahasta"]), ENT_QUOTES, "UTF-8"));
                //$tipome = trim(htmlspecialchars(strip_tags($_REQUEST["tipome"]), ENT_QUOTES, "UTF-8"));
                // $valorme = trim(htmlspecialchars(strip_tags($_REQUEST["valorme"]), ENT_QUOTES, "UTF-8"));

                //mysqli_query($conexion,
                //"INSERT INTO alumnos(nombre, mail, codigocurso) VALUES ('$nombre','$email',$curso)") //Se ponen comillas porque son cadenas de texto, y no se le ponen en curso porque se almacenan números
                //or die("Problemas en el insert". mysqli_error($conexion));

                //mysqli_close($conexion);

                //print "<h2>Alumno dado de alta</h2>";
                echo "hola";
            }







        ?>
   
        <!-- 
            ############################
                  FIN CÓDIGO PHP 
            ############################
        -->

        <!-- 
            ############################
                    MOSTRAR DATOS 
            ############################
        -->

        <?php
            $completo=mysqli_query($conexion,
                                        "select m.fecha_hora f, v.nombre t, m.valor v, v.ud_med u, s.id i
                                            from variables v
                                            INNER JOIN medidas m ON v.id = m.id_variable
                                            INNER JOIN sensores s ON m.id_sensor = s.id")
            or die("Problemas en la consulta:".mysqli_error($conexion));
        ?>


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
                <?php
                while ($comp = mysqli_fetch_array($completo)) {
                    echo "<tr>";
                        echo "<td scope='row'>" . $comp['f'] . "</td>";
                        echo "<td>" . $comp['t'] . "</td>";
                        echo "<td>" . $comp['v'] . "</td>";
                        echo "<td>" . $comp['u'] . "</td>";
                        echo "<td>" . $comp['i'] . "</td>";
                    echo "</tr>"; 
                }
                ?>
            </tbody>
        </table>


        <button type="button" class="btn btn-danger btn-block">Restablecer</button>
        
        <!-- 
            ############################
                  FIN MOSTRAR DATOS 
            ############################
        -->




        <!-- 
            ############################
                     CRÉDITOS 
            ############################
        -->
        <div>
            <hr>
            <p style="text-align: center">Desarrollado en el <a href="https://www.iesciudadjardin.es/">IES Ciudad Jardín</a> con mucho ❤ y ☕</p>
            <p style="text-align: center">por el grupo 1º ASIR 🤓👍</p>
        </div>
    
        <!-- 
            ############################
                   FIN CRÉDITOS 
            ############################
        -->

   
   
   
    </div>
    <!-- 
        ############################
               FIN CONTAINER 
        ############################
    -->



  


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