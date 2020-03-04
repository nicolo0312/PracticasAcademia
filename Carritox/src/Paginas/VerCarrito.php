<?php
namespace Carritox\Paginas;
session_start();
class VerCarrito implements \Library\Interfaces\Controller{
    private $listadoGuitarras= array(
        0=>array("marca"=>"Gibson", "modelo"=>"Les Paul", "precio"=>125000),
        1=>array("marca"=>"Fender", "modelo"=>"Stratocaster", "precio"=>112000)
    );
  

    public function get($get,$post,&$session){
        $session["carrito"][]=$get["id"];
        $str="";
        foreach($session["carrito"] as $k=>$v){
            $te= new \Library\TemplateEngine("../templates/VerCarrito.html");
            $te->addVariable("id",$v);
            $te->addVariable("marca",$this->listadoGuitarras[$v]["marca"]);
            $te->addVariable("modelo",$this->listadoGuitarras[$v]["modelo"]);
            $te->addVariable("precio",$this->listadoGuitarras[$v]["precio"]);
            $str.=$te->render();
        }
        $te1= new \Library\TemplateEngine("../templates/VerListaCarrito.html");
        $te1->addVariable("lista",$str);
        return $te1->render();
    }
    public function post($get,$post,&$session){

    }



}