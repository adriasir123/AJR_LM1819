<?php
-tablas
sensores
medidas
variables

nombre campos
f1
f2
tm
vm
//QUERY FECHA 1 + FECHA 2

$f1f2 = mysqli_query($conexion,
                      "select m.fecha, v.tipo, m.valor, v.ud_med, s.sensor
                          from variables v
                          INNER JOIN medidas m ON v.id = m.id_variable
                          INNER JOIN sensores s ON m.id_sensor = s.id
                          where fecha_hora BETWEEEN $_REQUEST[f1] AND $_REQUEST[f2]")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + TIPO MEDIDA

$f1f2tm = mysqli_query($conexion,
                      "select m.fecha, v.tipo, m.valor, v.ud_med, s.sensor
                          from variables v
                          INNER JOIN medidas m ON v.id = m.id_variable
                          INNER JOIN sensores s ON m.id_sensor = s.id
                          where fecha_hora BETWEEEN $_REQUEST[f1] AND $_REQUEST[f2] AND nombre = $_REQUEST[tm]")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + VALOR MEDIDA

$f1f2vm = mysqli_query($conexion,
                      "select m.fecha, v.tipo, m.valor, v.ud_med, s.sensor
                          from variables v
                          INNER JOIN medidas m ON v.id = m.id_variable
                          INNER JOIN sensores s ON m.id_sensor = s.id
                          where fecha_hora BETWEEEN $_REQUEST[f1] AND $_REQUEST[f2] AND valor = $_REQUEST[vm]")
        or die("Problemas en la consulta:".mysqli_error($conexion));

//QUERY FECHA 1 + FECHA 2 + TIPO MEDIDA + VALOR MEDIDA

$f1f2vm = mysqli_query($conexion,
                      "select m.fecha, v.tipo, m.valor, v.ud_med, s.sensor
                          from variables v
                          INNER JOIN medidas m ON v.id = m.id_variable
                          INNER JOIN sensores s ON m.id_sensor = s.id
                          where
                            fecha_hora BETWEEEN $_REQUEST[f1] AND $_REQUEST[f2]
                            AND nombre = $_REQUEST[tm]
                            AND valor = $_REQUEST[vm]")
        or die("Problemas en la consulta:".mysqli_error($conexion));


if ($reg=mysqli_fetch_array($registros))



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

?>
