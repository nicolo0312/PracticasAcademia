<?php
include_once ("../lib/TemplateEngine.php");

session_start();
foreach($_SESSION["carrito"] as $k=>$valor){
    if($_GET["id"]==$valor){
        unset($_SESSION["carrito"][$k]);
    break;
    }
}


$te= new TemplateEngine("../templates/borrar.html");
echo $te->render();


