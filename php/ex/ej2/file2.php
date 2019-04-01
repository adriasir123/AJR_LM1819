
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ej2</title>
</head>
<body>
    <?php
        $usuario = trim(htmlspecialchars(strip_tags($_REQUEST["usuario"]), ENT_QUOTES, "UTF-8"));
        session_start();
        $_SESSION['nombreUsu'] = $usuario;
    ?>
    <form action="file3.php">
        <label for="peso">Introduzca su peso (KG): </label>
        <input type="text" name="peso" id="peso"><br/>

        <label for="altura">Introduzca su altura (M): </label>
        <input type="text" name="altura" id="altura"><br/>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>