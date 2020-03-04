<?php
session_start();

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new \Twig\Environment($loader, [
 'cache' => false,
]);

$router->get('/', function () use ($router,$twig)
{

    $twig->load("index.html");

    return $twig->render(("index.html"),(array("name"=>"nicolas")));

});
$router->post('/register', function () use ($router,$twig)
{
    $_SESSION["usuarios"] = [];
    if (! in_array($_POST["usuario"], $_SESSION["usuarios"])){
        $_SESSION["usuarios"][]=array ($_POST["usuario"],$_POST["pass"]);
        
        
        return redirect("/");
    }
    
    return "Ya existe el usuario";
    
    
});

$router->post('/login', function () use ($router,$twig)
{
    $_SESSION["log"]=false;
    var_dump($_SESSION);

    foreach($_SESSION["usuarios"] as $user){
        if($_POST["usuario"]==$user[0] and $_POST["pass"]== $user[1]){
            $_SESSION["log"]=true;
            return redirect("/home");
            

        }
        return redirect("/");

    }

});

$router->get('/home', function () use ($router,$twig)
{   
    $twig->load("home.html");


    return $twig->render("home.html");

});

$router->get('/autos', function () use ($router,$twig)
{   
    $lista=array(
        array("id"=>"111","marca"=>"Renault", "modelo"=>"Clio", "anio"=>"2015","precio"=>245000),
        array("id"=>"121","marca"=>"Ford", "modelo"=>"Focus", "anio"=>"2018","precio"=>870000),
        array("id"=>"131","marca"=>"Fiat", "modelo"=>"Punto", "anio"=>"2014","precio"=>432000),
        array("id"=>"141","marca"=>"Peugeot", "modelo"=>"207", "anio"=>"2019","precio"=>590000)
    );

    return $twig->render('autos.html',['lista' => $lista]);

});
$router->get('/camionetas', function () use ($router,$twig)
{   
    $twig->load("camionetas.html");


    return $twig->render("camionetas.html");

});

$router->get('/motos', function () use ($router,$twig)
{   
    $twig->load("motos.html");


    return $twig->render("motos.html");

});

$router->get('/perfil', function () use ($router,$twig)
{   
    $twig->load("perfil.html");


    return $twig->render("perfil.html");

});

$router->get('/logout', function () use ($router,$twig)
{   
    unset($_SESSION);

    return redirect("/");

});

$router->get('/carrito', function () use ($router,$twig)
{   
    $lista=array(
        array("id"=>"111","marca"=>"Renault", "modelo"=>"Clio", "anio"=>"2015","precio"=>245000),
        array("id"=>"121","marca"=>"Ford", "modelo"=>"Focus", "anio"=>"2018","precio"=>870000),
        array("id"=>"131","marca"=>"Fiat", "modelo"=>"Punto", "anio"=>"2014","precio"=>432000),
        array("id"=>"141","marca"=>"Peugeot", "modelo"=>"207", "anio"=>"2019","precio"=>590000)
    );

    if(!empty($_GET["id"])){
        $_SESSION["carrito"][]=$_GET["id"];
    }

    foreach($_SESSION["carrito"]as $v){
        

    }



    

});






