<?php
include_once ("../lib/TemplateEngine.php");
session_start();

$_SESSION ["heladeras"]= array(
    "A"=>array("marca"=>"philco","precio"=>25450,"stock"=>7),
    "B"=>array("marca"=>"samsung","precio"=>45700,"stock"=>12)
);
$str="";

    foreach($_SESSION["heladeras"]as $k=>$v){
        $te= new TemplateEngine("../templates/heladeras.html");
        $te->addVariable("id",$k);
        $te->addVariable("marca",$v["marca"]);
        $te->addVariable("precio",$v["precio"]);
        $te->addVariable("stock",$v["stock"]);
        $str.= $te->render();
        
  
    }

$te1= new TemplateEngine("../templates/heladeras2.html");
$te1->addVariable("listaheladeras",$str);
echo $te1->render();



