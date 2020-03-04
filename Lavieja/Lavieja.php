<?php
class Lavieja{
    private $tablero=array();
    
    function __construct(){
        $i=0;
        while($i<3){
            $this->tablero[$i]=array();
            $j=0;
            while ($j<3){
                $this->tablero[$i] [$j]=" ";
                $j=$j+1;
            }
            $i=$i+1;
        }   

    }
    function mostrar(){
        return $this->tablero;
    }
    function jugarO($f,$c){
        $this->tablero[$f][$c]="o";

    }
    function jugarX($f,$c){
        $this->tablero[$f][$c]="x";

    }
    function ganoX(){
        $contadorH=0;
        $contadorV=0;
        $contadorD=0;
        $gano=false;
        $listaOtraD=array(2,1,0);
        for($i=0;$i<3;$i+=1){
            for($j=0;$j<3;$j+=1){
                if($this->tablero[$i][$j]=="x"){
                    $contadorH+=1;
                }
                if($this->tablero[$j][$i]=="x"){
                    $contadorV+=1;
                }
                if($this->tablero[$j][$j]=="x"){
                    $contadorD+=1;
                }
            
            }

            if($contadorH==3 or $contadorV==3 or $contadorD ==3){
                $gano=true;
            }
            $contadorV=0;
            $contadorH=0;
            $contadorD=0;
        foreach($listaOtraD as $k=>$v){
            if($this->tablero[$k][$v]=="x"){
                $contadorD+=1;
            }
        if($contadorD=3){
            $gano=true;
        }
        }

        return $gano;

        }
    }

    function ganoO(){
        $gano=false;
        $contadorD=0;
        $contadorH=0;
        $contadorV=0;
        $listaOtraD=array(2,1,0);
        for($i=0;$i<3;$i=$i+1){
            for($j=0;$j<3;$j=$j+1){
                if($this->tablero[$i][$j]=="o"){
                    $contadorH=$contadorH+1;
                }
                
                if($this->tablero[$j][$i]=="o"){
                    $contadorV=$contadorV+1;
                }
                if($this->tablero[$j][$j]=="o"){
                    $contadorD=$contadorD+1;
                }    

            }
            if($contadorD==3 or $contadorH==3 or $contadorV==3){
                $gano=true;
            }
        }
        foreach($listaOtraD as $k=>$v){
            if($this->tablero[$k][$v]=="o"){
                $contadorD=$contadorD+1;
            }
        if($contadorD==3){
            $gano=true;
        }
        

        }
        return $gano;

    

    }



        
}





