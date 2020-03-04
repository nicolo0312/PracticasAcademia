<?php
namespace Test;

use PHPUnit\Framework\TestCase;
final class RoundRobinTest extends TestCase{
    function testAddServer(){
        $round= new \Balancer\RoundRobin("RoundRobin");
        $this->assertTrue($round->addServer(new \Servers\ServerOk("ServerOK")));
        //$this->assertTrue($round->removeServer("ServerOK"));
        $this->assertEquals(200,$round->call());
    }


}
