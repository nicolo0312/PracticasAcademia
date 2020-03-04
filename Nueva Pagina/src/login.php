<?php
session_start();
$usuarios= array("nicolo"=>"gnr0312");
foreach ($usuarios as $usuario=>$clave){
    if ($usuario== $_POST ["usuario"] and $clave==$_POST["clave"]){
        header("Location:index.php?page=listadeproductos");
        
    }
    else {
        header("Location:index.php?page=entrar.php");
        

    }
}