<?php
namespace Carritox\Paginas;
session_start();
class Login implements \Library\Interfaces\Controller{
    public function get($get,$post,&$session){
        $acceder= new \Library\TemplateEngine("../templates/Acceder.html");
        return $acceder->render();   
    }
    public function post($get,$post,&$session){
        $session["log"]=False;
        $usuarios= array("nicolo"=>"gnr0312");
        foreach ($usuarios as $user=>$pass){
            if ($post["usuario"]==$user && $post["pass"]==$pass){
                $session["log"]=True;
            }
        }
        if ($session["log"]==True){
            header("location: index.php?page=Inicio");
        } else{
            header("location: index.php?page=login");
        }
        $login= new \Library\Interfaces\TemplateEngine();
        return $login->render();
    }
    
}