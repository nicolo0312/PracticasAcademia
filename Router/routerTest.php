<?php
require_once("./vendor/autoload.php");
require_once("./router.php");

use PHPUnit\Framework\TestCase;

final class routerTest extends TestCase{

    function testExisteRouter(){
    $this->assertTrue(class_exists("router"));
    }
    function testAddRoute(){
        $router= new router();
        $res=$router->addRoute("pepito","jose");
        $res1=$router->addRoute("pepito","josesito");
        $this->assertTrue($res);
    }
    function testMatch(){
        $router= new router();
        $router->addroute("pepito","jose");
        $res=$router->match("pepito");
        $this->assertEquals($res,"jose");
    }
    function testMatches(){
        $router= new router();
        $router->addroute("pap[ia]", "mama");
        $r= $router->match("papa");
        $r1=$router->match("papi");
        $this->assertEquals($r,"mama");
        $this->assertEquals($r1,"mama");
    }
    function testMatch1(){
        $router= new router();
        $router->addroute("\d+","59");
        $r=$router->match("35");
        $this->assertEquals($r,"59");
    }
    function testMatch2(){
        $router=new router();
        $router->addroute("([^s])", "r");
        $r=$router->match("s");
        $r1=$router->match("b");
        $this->assertEquals($r,null);
        $this->assertEquals($r1,"r");
        
    }
    function testMatch3(){
        $router=new router();
        $router->addroute("[C");
    }



}