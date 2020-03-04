<?php

session_start();
foreach($_SESSION["lista"] as $titulo=>$mensaje){
    echo $titulo." ";
    echo $mensaje;

}
?>
<a href="index.php">volver</a>