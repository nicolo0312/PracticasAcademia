<?php
namespace Ajedrez;

class PiezaNull implements \Inter\Pieza{

    public function mover($x1,$y1,$x2,$y2, $tablero){
        return False;
    }

}
