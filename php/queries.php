<?php
//Tablas relacionadas
sensores
medidas
variables

//Nombre de los campos nombrados
f1
f2
tm
vm

//Posibilidades
7 QUERIES
CON FECHAS
1-2
1-2-3
1-2-4
1-2-3-4
SIN FECHAS
3-4
3
4


//QUERY FECHA 1 + FECHA 2
//POSIBILIDAD 1

$f1f2 = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta'")
        or die("Problemas en la consulta:".mysqli_error($conexion));



//QUERY FECHA 1 + FECHA 2 + TIPO MEDIDA
//POSIBILIDAD 2

$f1f2tm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta'
                            AND v.Id = $tipome")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + VALOR MEDIDA
//POSIBILIDAD 3

$f1f2vm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta'
                            AND m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + TIPO MEDIDA + VALOR MEDIDA
//POSIBILIDAD 4
$f1f2tmvm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Fecha_Hora BETWEEEN '$fechadesde' AND '$fechahasta']
                            AND v.Id = $tipome
                            AND m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY TIPO MEDIDA + VALOR MEDIDA
//POSIBILIDAD 5
$tmvm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            v.Id = $tipome
                            AND m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));


//QUERY TIPO MEDIDA
//POSIBILIDAD 6
$tm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            v.Id = $tipome")
        or die("Problemas en la consulta:".mysqli_error($conexion));


//QUERY VALOR MEDIDA
//POSIBILIDAD 7
$vm = mysqli_query($conexion,
                      "select m.Fecha_Hora, v.Nombre, m.Valor, v.Ud_Med, s.Nombre
                          from variables v
                          INNER JOIN medidas m ON v.Id = m.Variables_Id
                          INNER JOIN sensores s ON m.Sensores_Id = s.Id
                          where
                            m.Valor = $valor")
        or die("Problemas en la consulta:".mysqli_error($conexion));




?>
