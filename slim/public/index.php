<?php
session_start();
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->get('/login', function (Request $request, Response $response, array $args) {
    $acceder= new \Library\TemplateEngine("../lib/templates/Acceder.html");
    $response->getBody()->write($acceder->render());
    return $response;
});

$app->post('/login', function (Request $request, Response $response, array $args) {
    $_SESSION["log"]=False;
        $usuarios= array("nicolo"=>"gnr0312");
        foreach ($usuarios as $user=>$pass){
            if ($_POST["usuario"]==$user && $_POST["pass"]==$pass){
                $_SESSION["log"]=True;
            }
        }
        if ($_SESSION["log"]==True){
           $response=$response->withStatus(302);
           $response=$response->withHeader("Location","Inicio");
        } else{
            $response=$response->withStatus(302);
            $response=$response->withHeader("Location","login");
            
        }
        return $response;
});


$app->get('/Inicio', function (Request $request, Response $response, array $args) {
    $te= new \Library\TemplateEngine("../lib/templates/inicio.html");
    $response->getBody()->write($te->render());
    return $response;
});

$app->get('/Instrumentos', function (Request $request, Response $response, array $args) {
    $te= new \Library\TemplateEngine("../lib/templates/instrumentos.html");
    $response->getBody()->write($te->render());
    return $response;
});

$app->get('/guitarras', function (Request $request, Response $response, array $args) {
    $listadoGuitarras= array(
        1=>array("marca"=>"Gibson", "modelo"=>"Les Paul", "precio"=>125000),
        2=>array("marca"=>"Fender", "modelo"=>"Stratocaster", "precio"=>112000));

        $str="";
        foreach($listadoGuitarras as $k=>$v){
            $productos= new \Library\TemplateEngine("../lib/templates/guitarras.html");
            $productos->addVariable("id",$k);
            $productos->addVariable("marca",$v["marca"]);
            $productos->addVariable("modelo",$v["modelo"]);
            $productos->addVariable("precio",$v["precio"]);
            $str.= $productos->render();    
        }
        $te1=new \Library\TemplateEngine("../lib/templates/listadoGuitarras.html");
        $te1->addVariable("listado",$str);
        
    $response->getBody()->write($te1->render());
    return $response;
});
$app->get('/VerCarrito', function (Request $request, Response $response, array $args) {
    $listadoGuitarras= array(
        1=>array("marca"=>"Gibson", "modelo"=>"Les Paul", "precio"=>125000),
        2=>array("marca"=>"Fender", "modelo"=>"Stratocaster", "precio"=>112000)
    );
    if (!empty($_GET["id"])) {
        $_SESSION["carrito"][]=$_GET["id"];
    }
        $str="";
        foreach($_SESSION["carrito"] as $k=>$v){
            $te= new \Library\TemplateEngine("../lib/templates/VerCarrito.html");
            $te->addVariable("id",$v);
            $te->addVariable("marca",$listadoGuitarras[$v]["marca"]);
            $te->addVariable("modelo",$listadoGuitarras[$v]["modelo"]);
            $te->addVariable("precio",$listadoGuitarras[$v]["precio"]);
            $str.=$te->render();
        }
        $te1= new \Library\TemplateEngine("../lib/templates/VerListaCarrito.html");
        $te1->addVariable("lista",$str);
    $response->getBody()->write($te1->render());
    
    return $response;
}); 
$app->get('/borrar', function (Request $request, Response $response, array $args) {
foreach($_SESSION["carrito"] as $k=>$valor){
    if($_GET["id"]==$valor){
        unset($_SESSION["carrito"][$k]);
    break;
    }
}

$te= new \Library\TemplateEngine("../lib/templates/borrar.html");

$response->getBody()->write($te->render());

    
    return $response;

}); 

$app->get('/comprar', function (Request $request, Response $response, array $args) {
    
    $te= new \Library\TemplateEngine("../lib/templates/Comprar.html");
    
    $response->getBody()->write($te->render());
    
        
        return $response;
    
    }); 
$app->run();