<?php

namespace Carritox\Paginas;
session_start();

class Inicio implements \Library\Interfaces\Controller{
    public function get($get,$post,&$session){
        $te= new \Library\TemplateEngine("../templates/inicio.html");
         return $te->render();

    }
    public function post($get,$post,&$session){
        
    }
}
