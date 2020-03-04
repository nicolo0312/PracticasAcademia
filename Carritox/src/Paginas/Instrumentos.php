<?php
namespace Carritox\Paginas;


class Instrumentos implements \Library\Interfaces\Controller{
    public function get($get,$post,&$session){
        $te= new \Library\TemplateEngine("../templates/instrumentos.html");
        return $te->render();  
    }
    public function post($get,$post,&$session){
        
    }
}
