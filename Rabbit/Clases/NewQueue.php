<?php
namespace Clase;

class NewQueue{
    private $pilaEntrada;
    private $pilaSalida;

    public function __construct(){
        $this->pilaEntrada= new \Clase\Stack;
        $this->pilaSalida= new \Clase\Stack;
    }

    public function put($element){
        while(!($this->pilaSalida->empty())){
            $r=$this->pilaSalida->pop();
            $this->pilaEntrada->push($r);
        }
        $this->pilaEntrada->push($element);
        return true;
    }
    public function get(){
        while(!($this->pilaEntrada->empty())){
            $r=$this->pilaEntrada->pop();
            $this->pilaSalida->push($r);
        }
        return $this->pilaSalida->pop();
  


    }

    public function size(){
        return count($this->lista);
    }
}