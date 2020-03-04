<?php
namespace Clase;

class Stack{
    private $lista= array();
    
    public function push($elemento){
    $this->lista[]=$elemento;
    return true;
    }
    
    public function pop(){
        if(!empty($this->lista)){
          return array_pop($this->lista);
         } else{
             return null;

          }
    
    }

    public function empty(){
        if (empty($this->lista)){
            return true;
        }
        else{
            return false;
        }
    }
}