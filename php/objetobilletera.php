
<?php
class Billetera {
    private $billetes=array(2=>0,5=>0,10=>0,20=>0,50=>0,100=>0,500=>0,1000=>0); 

    function agregarPlata($billete,$cantidad){

        $this->billetes [$billete]=$this->billetes [$billete] + $cantidad;
        
    }
    function sacarPlata($billete,$cantidad){
        $this->billetes [$billete]=$this->billetes [$billete]-$cantidad;

    }
    function mostrarPlata(){
        $plata=array();
        
        foreach($this->billetes as $k=>$v){

        
            if ($v!=0){
                $plata [$k]= $v;
            }
            

        }
        return $plata;
         
    }
    
    function contar(){
        $total=0;
        foreach ($this->billetes as $k=>$v){
            $total=$total+$k*$v;
        }
        return $total;
        
    
    }
        
    
}

    
}

$eli=new billetera();
$eli->agregarPlata(50,6);
$eli->agregarPlata(5,3);
$edu=new billetera();
$edu->agregarPlata(2,15);
$edu->agregarPlata(1000,1);
$lean=new billetera();
$lean->agregarPlata(2,1);
$rober=new billetera();
$rober->agregarPlata(100,3);
$eze=new billetera();
$eze->agregarPlata(5,2);
$eze->agregarPlata(20,3);
$tom=new billetera();
$tom->agregarPlata(5,6);
$tom->agregarPlata(1000,2);
$mari=new billetera();
$mari->agregarPlata(500,3);
$gabi=new billetera();
$gabi->agregarPlata(2,10);
$gabi->agregarPlata(100,4);
$gian=new billetera();
$gian->agregarPlata(50,3);
$gian->agregarPlata(100,6);
$mati=new billetera();
$mati->agregarPlata(500,6);
$lucho=new billetera();
$lucho->agregarPlata(1000,1);
$diego=new billetera();
$diego->agregarPlata(100,5);
$dante=new billetera();
$dante->agregarPlata(100,2);
$dario=new billetera();
$dario->agregarPlata(100,3);
$nico= new Billetera();
$nico->agregarPlata(20,3);
//print_r($nico);
$nico->agregarPlata(10,2);
//print_r($nico);
$nico->mostrarPlata();
//print_r($nico->mostrarPlata());
$nico->contar();
print_r($nico->contar());



