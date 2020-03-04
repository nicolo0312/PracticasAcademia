<?php
session_start();
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, array $args) {
    $te= new \Libreria\TemplateEngine("../templates/form.html");
    $response->getBody()->write($te->render());
    return $response;
});


$app->post('/palabra', function (Request $request, Response $response, array $args) {
    $_SESSION["palabra"]=$_POST["palabra"]; 
    $_SESSION["letrasJugadas"] = array();
    
    $response=$response->withStatus(302);
    $response=$response->withHeader("location","/   jugar");
    return $response;
});
$app->get('/jugar/{letra}', function (Request $request, Response $response, array $args) {

    $letra = $args["letra"];
    $_SESSION["letrasJugadas"][] = $letra;


    $response=$response->withStatus(302);
    $response=$response->withHeader("location","/jugar");
    return $response;

});


$app->get('/jugar', function (Request $request, Response $response, array $args) {
    $laVieja= new \Libreria\LaVieja($_SESSION["palabra"],5);
    $gano=$laVieja->gano();
    $perdio=$laVieja->perdio();
    $termino=$laVieja->termino();

    foreach($_SESSION["letrasJugadas"] as $letra){
        $laVieja->jugar($letra);
    }

     if($gano==true){
         $response->getBody()->write("YOU WIN");
    }
    if($perdio==true){
        $response->getBody()->write("GAME OVER");
   }



    $response->getBody()->write($laVieja->mostrar());
    $te= new \Libreria\TemplateEngine("../templates/letrasParaJugar.html");
    $response->getBody()->write($te->render());
    return $response;
});


$app->run();