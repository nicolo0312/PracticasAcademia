<?php
namespace Ajedrez;

class Rey implements \Inter\Pieza{
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
        //el rey se puede correr solo un casillero: arriba, abajo, en diagonal,
        //y puede comer piezas de otro color.
        $coorActual= $tablero->dame($x1,$y1);
        $coorSiguiente=[$x2,$y2];
        if($coorSiguiente==[$x1-1,$y1-1] and $tablero->dame($x1-1,$y1-1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1-1,$y1]and $tablero->dame($x1-1,$y1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1-1,$y1+1]and $tablero->dame($x1-1,$y1+1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1,$y1+1]and $tablero->dame($x1,$y1+1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1+1,$y1+1]and $tablero->dame($x1+1,$y1+1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1+1,$y1]and $tablero->dame($x1+1,$y1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1+1,$y1-1]and $tablero->dame($x1+1,$y1-1)->esBlanco!=$this->esBlanco||
        $coorSiguiente==[$x1,$y1-1] and $tablero->dame($x1,$y1-1)->esBlanco!=$this->esBlanco){
            return True;
        }
        return False;
        

        

        
        

        
    }
    

}