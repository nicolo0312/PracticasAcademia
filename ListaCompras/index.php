<?php
session_start();
if (empty($_SESSION["lista"])){
    $_SESSION["lista"]=array();
}
foreach($_SESSION["lista"] as $titulo=>$mensaje){
    echo "<a href=verTarea.php>$titulo</a>"."   ";
    echo "<a href='borrar.php?titulo=$titulo'>borrar</a>";
    echo"<br>";
}
?>
<a href="crearTarea.html">Crear Tarea</a>