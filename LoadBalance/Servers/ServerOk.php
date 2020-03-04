<?php
namespace Servers;
use Interfaces\Server;

class ServerOk implements Server{
    private $name;
    public function __construct($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function call(){
        return 200;
    }

    
    }

