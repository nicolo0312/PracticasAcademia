<?php
namespace Ajedrez;

class Reina implements \Inter\Pieza{
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
       return true;
    }
}