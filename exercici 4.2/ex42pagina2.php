<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    if (isset($_POST["frase1"])) {
        $_SESSION['frase1'] = $_POST['frase1'];
    }
    ?>

    <p>ENREGISTRA FRASE 2</p>
    <form action="/ex42pagina3.php" method="post">
        <input type="text" name="frase2">
        <input type="submit" value="enviar">
    </form>
</body>

</html>