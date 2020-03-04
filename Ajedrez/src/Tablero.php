<?php
namespace Ajedrez;

class Tablero{
    private $tablero;

    public function __construct(){
        $i=0;
        $arrayx2= array();
        while($i<8){
            $arrayx2[$i]=array();
            $j=0;
            while($j<8){
                $arrayx2[$i][$j]= new \Ajedrez\PiezaNull;
                $j=$j+1;
            }
            $i=$i+1;
        }
        $this->tablero= $arrayx2;
    }

    public function mostrar(){

        return $this->tablero;
    }
    public function colocarPieza($x, $y,$pieza){
        if($this->tablero[$x][$y] instanceof \Ajedrez\PiezaNull){
        $this->tablero[$x][$y]=$pieza;
        return True;
        }
        return False;
    }

    public function mover($x1,$y1,$x2,$y2){
        
        if($x1<0||$y1<0||$x2<0||$y2<0||$x1>7||$y1>7||$x2>7||$y2>7){
            return false;
        }
        if($this->dame($x1,$y1) instanceof \Ajedrez\PiezaNull){
            return false;
        }
        
   
        
        if($this->dame($x1,$y1)->mover($x1,$y1,$x2,$y2,$this)){
            $this->colocarPieza($x2,$y2,$this->tablero[$x1][$y1]);
            $this->colocarPieza($x1,$y1, new \Ajedrez\PiezaNull);
            }
            
            return True;
        
    }
    public function  termino (){
        

    }
    public function dame($x,$y){
       if($this->tablero[$x][$y] instanceof \Ajedrez\PiezaNull){
           return new \Ajedrez\PiezaNull();
       } 
       else{
           return $this->tablero[$x][$y];
       }
    }



    
        
    
}