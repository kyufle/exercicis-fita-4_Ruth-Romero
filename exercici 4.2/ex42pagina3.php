<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coincidències</title>
</head>
<body>
    <p>COINCIDÈNCIES</p>

    <?php
    session_start();
    $frase1 = isset($_SESSION['frase1']) ? $_SESSION['frase1'] : '';
    $frase2 = isset($_POST['frase2']) ? $_POST['frase2'] : '';

    $_SESSION['frase2'] = $frase2;

    $paraules1 = preg_split('/\s+/', trim($frase1));
    $paraules2 = preg_split('/\s+/', trim($frase2));

    $paraules1 = array_map('strtolower', $paraules1);
    $paraules2 = array_map('strtolower', $paraules2);

    $coincidencies = array_intersect($paraules1, $paraules2);

    if (count($coincidencies) > 0) {
        foreach ($coincidencies as $paraula) {
            echo "<p>La paraula <strong>$paraula</strong> està a les dues frases.</p>";
        }
    } else {
        echo "<p>No hi ha cap coincidència.</p>";
    }
    ?>

    <p><a href="ex42pagina1.php">Torna a la primera pàgina</a></p>
</body>
</html>
