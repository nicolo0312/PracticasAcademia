<?php
session_start();
include("../vendor/autoload.php");


$router= new \Library\Router();
$router->addRoute("logout", new \Carritox\Paginas\Logout());
$router->addRoute("login", new \Carritox\Paginas\Login());
$router->addRoute("Instrumentos",new \Carritox\Paginas\Instrumentos());
$router->addRoute("guitarras", new \Carritox\Paginas\Guitarras());
$router->addRoute("Inicio", new \Carritox\Paginas\Inicio());
$router->addRoute("VerCarrito", new \Carritox\Paginas\VerCarrito());


if(empty($_GET['page'])){
    $res= $router->match("login");
}else{
    $res=$router->match($_GET['page']);
}
if ($_SERVER['REQUEST_METHOD']=='GET'){
    echo $res->get($_GET,$_POST,$_SESSION);

}else{
        echo $res->post($_GET,$_POST,$_SESSION);
    }











