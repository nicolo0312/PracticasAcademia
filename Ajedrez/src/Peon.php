<?php
namespace Ajedrez;

class Peon implements \Inter\Pieza{
    private $color;

    public function __construct($color){
        $this->color=$color;
    }
    public function esBlanco(){
        if($this->color=="blanco"){
            return True;
        }
        return False;
    }

    public function mover($x1,$y1,$x2,$y2,$tablero){
        $coorActual=$tablero->dame($x1,$y1);
        $coorSiguiente=[$x2,$y2];

        if ($coorActual->esBlanco()==True){
            if(($coorSiguiente==[$x1-1,$y1-1] and $tablero->dame($x1-1,$y1-1)->esBlanco==False)||
            ($coorSiguiente==[$x1-1,$y1+1] and $tablero->dame($x1-1,$y1+1)->esBlanco==False)||
            ($coorSiguiente==[$x1-1,$y1] and $tablero->dame($x1-1,$y1) instanceof \Ajedrez\PiezaNull)){
              
                return True;
            }
            return False;
        }
        elseif($coorActual->esBlanco()==False){
            if(($coorSiguiente==[$x1+1,$y1-1] and $tablero->dame($x1+1,$y1-1)->esBlanco==True)||
            ($coorSiguiente==[$x1+1,$y1+1] and $tablero->dame($x1-1,$y1+1)->esBlanco==True)||
            ($coorSiguiente==[$x1+1,$y1] and $tablero->dame($x1-1,$y1) instanceof \Ajedrez\PiezaNull)){
                return True;
            }
            return False;
        }
      
    }
}