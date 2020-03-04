<?php
namespace Ajedrez;

class Alfil implements \Inter\Pieza{
    private $color;

    public function __construct($color){
        $this->color=$color;
    }

    public function mover($x1,$y1,$x2,$y2,$tablero){
       return true; 
    }
    

}