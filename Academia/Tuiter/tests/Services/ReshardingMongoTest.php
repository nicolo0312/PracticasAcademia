<?php

namespace TestTuiter\Services;

use PHPUnit\Framework\TestCase;
use \Tuiter\Services\LoginService;
use \Tuiter\Services\UserService;
use \Tuiter\Models\User;
use \Tuiter\Models\UserNull;

final class ReshardingMongoTest extends TestCase{
    private $collection;
    private $otraCollection;
    protected function setUp(): void{
        $conn = new \MongoDB\Client("mongodb://localhost");
        $this->collection[] = $conn->Tuiter->usuarios1;
        $this->otraCollection[]=$conn->Tuiter->usuarios2;
    }

    public function testReshardingUsers(){
        $rm= new \Tuiter\Services\ReshardingMongo();
        $us = new UserService($this->collection);
        $otroUs= new UserService($this->otraCollection);
        for($i=0;$i<1000;$i++){
            $var=$us->register("usuario".$i,"1234".$i, "matias".$i);
           
        }
        $ru= $rm->reshardingUsers($this->collection, $this->otraCollection);
        for($i=0;$i<1000;$i++){
            $gu=$otroUs->getUser("usuario".$i);
            $this->assertEquals(new \Tuiter\Models\User("usuario".$i,"1234".$i, "matias".$i),$gu);

    }
}
}