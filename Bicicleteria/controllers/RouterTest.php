<?php

include '../vendor/autoload.php';
include 'Router.php';

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{

    function testAgregarController()
    {
        $router= new Router();
        $rs=$router->agregarController("jose","perez");
        $this->assertTrue($rs);
        $this->assertFalse($router->agregarController("jose","gonzalez"));

    }
    function testDeleteController(){
        $router= new Router();
        $rs=$router->agregarController("jose","perez");
        $rs1=$router->deleteController("jose");
        $this->assertTrue($rs1);
        $this->assertFalse($router->deleteController("carlos"));

    }
    function testDispatch(){
        $router= new Router();
        $rs=$router->agregarController("jose","perez");
        $rt=$router->agregarController("1","4");
        $res1=$router->dispatch("jose");
        $res2=$router->dispatch("1");
        $this->assertEquals("perez",$res1);
        $this->assertEquals("4",$res2);
        $this->assertFalse($router->dispatch("6"));
    }
    
    
}
