<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>tablas</title>
    </head>
    <body>
        <?php
            $i=1;
            for ($i=1;$i<=10;$i++) {
                print "<div style='border:1 solid black'>";
                for ($j=0;$j<=10;$j++) {
                    $resul=$i*$j;
                    echo "$i X $j = $resul <br/>";
                }
                print "</div>";
            }    
        ?>
    </body>
</html>