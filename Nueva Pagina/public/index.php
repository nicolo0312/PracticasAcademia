<?php
include ("../lib/router.php");

$router= new router();
$router->addRoute("borrar","../src/borrar.php");
$router->addRoute("listadeproductos","../src/listaDeProductos.php");
$router->addRoute("login","../src/login.php");
$router->addRoute("entrar","../src/entrar.php");
$router->addRoute("verCarrito","../src/verCarrito.php");

include ($router->match($_GET["page"]));



    



