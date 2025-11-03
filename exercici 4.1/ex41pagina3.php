<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ENDEVINA EL NOMBRE</p>
</body>
</html>
<?php
    if (!isset($_POST["endevina"])) {
        echo "<form method='post'>";
        echo "<input type='number' name='endevina'>";
        echo "<button type='submit'>enviar</button>";
        echo "</form>";
    } else {
        if($_SESSION["ocult"] > $_POST["endevina"]){
            echo "<form method='post'>";
            echo "<input type='number' name='endevina'>";
            echo "<button type='submit'>enviar</button>";
            echo "</form>";
            echo "es menor ". $_POST["endevina"];
        } else if($_SESSION["ocult"] === $_POST["endevina"]){
            echo "FELICITATS SÓN IGUALS";
            echo "<a href='ex41pagina1.php'>pagina principal</a>";
        } else if($_SESSION["ocult"] < $_POST["endevina"]){
            echo "<form method='post'>";
            echo "<input type='number' name='endevina'>";
            echo "<button type='submit'>enviar</button>";
            echo "</form>";
            echo "es major ". $_POST["endevina"];
        }
    }
?>
