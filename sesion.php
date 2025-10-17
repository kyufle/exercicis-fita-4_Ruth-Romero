<?php
session_start();

// Si se envió el formulario
if (isset($_POST["user"])) {
    $_SESSION['usuari'] = $_POST['user'];
}

// Mostrar el usuario de la sesión si existe
if (isset($_SESSION["usuari"])) {
    echo "<p>Usuari: " . $_SESSION["usuari"] . "</p>";
}

$_SESSION["cosa"] = "hola que tal";
?>
<a href="set2.php">pag2</a>
<form method="post">
    User: <input type="text" name="user">
    <input type="submit" value="Enviar">
</form>
