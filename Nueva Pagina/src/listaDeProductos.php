<?php
include_once ("../lib/TemplateEngine.php");


$productos=array(
    "1"=>array('nombre'=>"Guitarra Yamaha", 'precio'=>"$17.500"),
    "2"=>array('nombre'=>"Guitarra Gibson", 'precio'=>"$85.000"),
    "3"=>array('nombre'=>"Guitarra squier", 'precio'=>"$25.500"),
    "4"=>array('nombre'=>"Guitarra epiphone", 'precio'=>"$32.000"),
    "5"=>array('nombre'=>"Guitarra texas", 'precio'=>"$9.000"),
    "6"=>array('nombre'=>"Guitarra ibanez", 'precio'=>"$18.000"),
    "7"=>array('nombre'=>"Guitarra duesenberg", 'precio'=>"$156.000"),
    "8"=>array('nombre'=>"Guitarra crimson", 'precio'=>"$13.000"),
    "9"=>array('nombre'=>"Guitarra sx", 'precio'=>"$14.000"),
    "10"=>array('nombre'=>"Guitarra gracia", 'precio'=>"$9.000"),
    "11"=>array('nombre'=>"Guitarra alpujarra", 'precio'=>"$21.000"),
    "12"=>array('nombre'=>"Guitarra godin", 'precio'=>"$63.000"),
    "13"=>array('nombre'=>"Guitarra Antigua Casa Nuñez", 'precio'=>"$17.000")
);
$te1=new TemplateEngine("../templates/detalleProducto.template");
$strProducto="";
foreach($productos as $k=>$v){
    $te1->addVariable("id",$k);
    $te1->addVariable("nombre",$v['nombre']);
    $te1->addVariable("precio",$v['precio']);

    $strProducto.=$te1->render();
}



$te2=new TemplateEngine("../templates/listaDeProductos.html");
$te2->addVariable("productos",$strProducto);
echo $te2->render();

