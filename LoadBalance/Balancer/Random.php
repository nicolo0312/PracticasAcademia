<?php
namespace Balancer;

use \Interfaces\Server;
use \Interfaces\LoadBalancer;


class Random implements Server, LoadBalancer{
private $name;
private $serverList= array();


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
    $posicionRandom=array_rand($this->serverList);
    return $this->serverList[$posicionRandom]->call();
    
    
}
function getList(){
    return $this->serverList;
}






}

