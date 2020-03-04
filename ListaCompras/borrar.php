<?php

session_start();
unset($_SESSION["lista"][$_GET["titulo"]]);
?>
<a href="index.php">volver</a>