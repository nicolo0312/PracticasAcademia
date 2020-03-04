<?php
namespace Balancer;

use \Interfaces\Server;
use \Interfaces\LoadBalancer;


class RoundRobin implements Server, LoadBalancer{
private $name;
private $serverList= array();
private $serverNumber=array();
private $indice=0;

function __construct($name){
    $name=$this->name;
}
function addServer(Server $server){
    if (empty($this->serverList[$server->getName()])){
    $this->serverList[$server->getName()]=$server;
    return True;
    }else{
        return False;
    }
}
function removeServer(String $serverName){
    foreach($this->serverList as $k=>$v){
        if($k==$serverName){
            unset($this->serverList[$k]);
            return True;
        }
        else{
            return False;
        }

    }


}
function getName(){
    return $this->name;
}

function call(){
    $this->serverNumber=array();
    foreach($this->serverList as $k=>$v){
        $this->serverNumber[] =$v;
    }
    if($this->indice>=count($this->serverNumber)){
        $this->indice=0;
        return $this->serverNumber[$this->indice]->call();
    }else{
        return $this->serverNumber[$this->indice]->call();

    }
    $this->indice+=1;
    
    
}
function getList(){
    return $this->serverList;
}






}

