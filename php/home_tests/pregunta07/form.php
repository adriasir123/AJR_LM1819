<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>pregunta07</title>
</head>
<body>
    <!-- Cree un formulario para introducir un email. En la página de respuesta debe mostrar todos los datos del
        alumno con ese email o un mensaje indicando que el email no existe en la base de datos.-->

    <form action="answer.php">
        <label for="email">Email: </label>
        <input type="text" name="email" id="email"><br/>

        <?php
          if (isset($_COOKIE["error"])) {
            echo "$_COOKIE['error']";
          }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
