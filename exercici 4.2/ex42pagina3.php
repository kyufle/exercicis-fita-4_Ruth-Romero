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
    <p>COINCIDÈNCIES</p>
    <a href="ex42pagina1.php">pagina inicial</a>
</body>  
</html>
<?php
    $frase1 = explode(" ",$_SESSION["frase1"]);
    $frase2 = explode(" ",$_POST["frase2"]);
    $flagExisteix = false;
    for ($i= 0;$i<count($frase1);$i++){
        $count = 0;
        for ($j= 0;$j<count($frase2);$j++){
            if ($frase1[$i]==$frase2[$j]){
                $flagExisteix = true;
                $count += 1;
            }
        }
        if ($flagExisteix){    
            echo "<p>la paraula ".$frase1[$i]." s'ha repetit ".$count."</p>";
        }
    }
    if (!$flagExisteix){
        echo "<p>No hi ha cap coincidència.</p>";
    }
?>