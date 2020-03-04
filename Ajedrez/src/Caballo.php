<?php
namespace Ajedrez;

class Caballo implements \Inter\Pieza{
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
        
        if ($coorSiguiente==[$x1-2,$y1-1]and $tablero->dame($x1-2,$y1-1)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1-2,$y1+1]and $tablero->dame($x1-2,$y1+1)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1-1,$y1-2]and $tablero->dame($x1-1,$y1-2)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1-1,$y1+2]and $tablero->dame($x1-1,$y1+2)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1+1,$y1-2]and $tablero->dame($x1+1,$y1-2)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1+1,$y1+2]and $tablero->dame($x1+1,$y1+2)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1+2,$y1-1]and $tablero->dame($x1+2,$y1-1)->esBlanco()!=$this->esBlanco()||
        $coorSiguiente==[$x1+2,$y1+1]and $tablero->dame($x1+2,$y1+1)->esBlanco()!=$this->esBlanco()){
       return true;
        }
    }
}