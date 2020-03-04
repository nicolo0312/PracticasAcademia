<?php
namespace Carritox\Paginas;


class Guitarras implements \Library\Interfaces\Controller{
     private $listadoGuitarras= array(
        0=>array("marca"=>"Gibson", "modelo"=>"Les Paul", "precio"=>125000),
        1=>array("marca"=>"Fender", "modelo"=>"Stratocaster", "precio"=>112000)
    );
  
    public function get($get,$post,&$session){
        
        
        $str="";
        foreach($this->listadoGuitarras as $k=>$v){
            $te= new \Library\TemplateEngine("../templates/guitarras.html");
            $te->addVariable("id",$k);
            $te->addVariable("marca",$v["marca"]);
            $te->addVariable("modelo",$v["modelo"]);
            $te->addVariable("precio",$v["precio"]);
            $str.= $te->render();
            

        }
        $te1=new \Library\TemplateEngine("../templates/listadoGuitarras.html");
        $te1->addVariable("listado",$str);
        return $te1->render();
    }
    public function post($get,$post,&$session){
        
    }
}