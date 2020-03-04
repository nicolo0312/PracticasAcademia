<?php
session_start();
$_SESSION["lista"][$_POST["titulo"]]=$_POST["mensaje"];
print_r($_SESSION);
print_r("<br>");
?>
<a href="index.php">volver</a>

