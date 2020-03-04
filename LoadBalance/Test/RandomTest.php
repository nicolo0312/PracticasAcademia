<?php
namespace Test;

use PHPUnit\Framework\TestCase;
final class RandomTest extends TestCase{
    function testAddServer (){
        $random= new \Balancer\Random("Random");
        $this->assertTrue($random->addServer(new \Servers\ServerOk("ServerOk")));
       // $this->assertTrue($random->removeServer("ServerOk"));
        $this->assertEquals(200,$random->call());
    }

}
