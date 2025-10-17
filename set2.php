<?php
session_start();
echo "<p>Usuari:".$_SESSION["usuari"]."</p>";
?>

<a href="sesion.php">Tornar</a>