<?php
    session_start();
    if (isset($_SESSION["text"]) && isset($_POST["textarea"])){
        $_SESSION["text"] .= $_POST["textarea"] . "\n\n";
    } else if(isset($_POST["textarea"])){
        $_SESSION["text"] = $_POST["textarea"] . "\n\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulari amb textarea</title>
</head>
<body>
    <form method="post">
        <textarea name="textarea"></textarea>
        <button type="submit">enviar</button>
    </form>
    <pre>
        <?php
            echo $_SESSION["text"];
        ?>
    </pre>

</body>
</html>