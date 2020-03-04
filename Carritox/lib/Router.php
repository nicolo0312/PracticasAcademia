<?php

namespace Library;


class Router{
    private $lista=array();
    



    function addRoute($path,$target){
        
        if (empty($this->lista["#".$path."#"])){
            $this->lista["#".$path."#"]=$target;
            return true;
        }
        else{
            return false;
        }
    }
    function match($path){
        foreach($this->lista as $regex=>$target){
            $r= preg_match_all($regex,$path);
            if($r>0){
                return $target;
                
            }
            

        }
    return null;

    }
    
    
    
    

}