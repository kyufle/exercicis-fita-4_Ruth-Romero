<?php
    session_start();
    if (isset($_SESSION["letra"]) && isset($_GET["letraLocal"])) {
        $_SESSION["letra"] .= $_GET["letraLocal"];
        echo $_SESSION["letra"];
    } else if(isset($_GET["letraLocal"])){
        $_SESSION["letra"] = $_GET["letraLocal"];
        echo $_SESSION["letra"];
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teclat amb petició get</title>
</head>
<body>
    <div class="allTheKeys">
        <div>
            <a href="?letraLocal=a">a</a>
        </div>
        <div>
            <a href="?letraLocal=b">b</a>
        </div>
        <div>
            <a href="?letraLocal=c">c</a>
        </div>
        <div>
            <a href="?letraLocal=d">d</a>
        </div>
        <div>
            <a href="?letraLocal=e">e</a>
        </div>
        <div>
            <a href="?letraLocal=f">f</a>
        </div>
        <div>
            <a href="?letraLocal=g">g</a>
        </div>
        <div>
            <a href="?letraLocal=h">h</a>
        </div>
        <div>
            <a href="?letraLocal=i">i</a>
        </div>
        <div>
            <a href="?letraLocal=j">j</a>
        </div>
        <div>
            <a href="?letraLocal=k">k</a>
        </div>
        <div>
            <a href="?letraLocal=l">l</a>
        </div>
        <div>
            <a href="?letraLocal=m">m</a>
        </div>
        <div>
            <a href="?letraLocal=n">n</a>
        </div>
        <div>
            <a href="?letraLocal=ñ">ñ</a>
        </div>
        <div>
            <a href="?letraLocal=o">o</a>
        </div>
        <div>
            <a href="?letraLocal=p">p</a>
        </div>
        <div>
            <a href="?letraLocal=q">q</a>
        </div>
        <div>
            <a href="?letraLocal=r">r</a>
        </div>
        <div>
            <a href="?letraLocal=s">s</a>
        </div>
        <div>
            <a href="?letraLocal=t">t</a>
        </div>
        <div>
            <a href="?letraLocal=u">u</a>
        </div>
        <div>
            <a href="?letraLocal=v">v</a>
        </div>
        <div>
            <a href="?letraLocal=w">w</a>
        </div>
        <div>
            <a href="?letraLocal=x">x</a>
        </div>
        <div>
            <a href="?letraLocal=y">y</a>
        </div>
        <div>
            <a href="?letraLocal=z">z</a>
        </div>
    </div>
</body>
</html>