<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <?php
        if (isset($_REQUEST['error'])) {
            print "<p style='color:red'>$_REQUEST[error]</p>";
        }
    ?>
    <form action="borrar.php" method="POST">
        <p>
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail">
        </p>
        <p>
            <input type="submit" value="Borrar">
        </p>
    </form>
</body>
</html>