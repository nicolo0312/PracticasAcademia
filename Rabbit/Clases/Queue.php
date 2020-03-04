<?php
namespace Clase;

class Queue{
    private $lista= array();

    public function put($element){
        $this->lista[]=$element;
        return true;
    }
    public function get(){
        if(!empty($this->lista)){
            $elemento=array_shift($this->lista);
            return $elemento;
        }
        return false;

    }

    public function size(){
        return count($this->lista);
    }
}