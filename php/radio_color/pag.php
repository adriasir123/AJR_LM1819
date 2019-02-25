<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coloritos</title>
</head>
<body style="background-color:
    <?php
        if (isset($_COOKIE['color'])) {
            echo $_COOKIE['color'];
        }
    ?>">

    <form action="cambiar.php">
        <p>
            Seleccione color de fondo:
            <input type="radio" value="#FF0000" name="color" checked>ROJO
            <input type="radio" value="#00FF00" name="color" checked>VERDE
            <input type="radio" value="#0000FF" name="color" checked>AZUL
        </p>    
    </form>
</body>
</html>