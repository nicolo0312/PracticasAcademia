<?php
require_once("./vendor/autoload.php");
require_once("./TemplateEngine.php");

use PHPUnit\Framework\TestCase;

final class TemplateEngineTest extends TestCase{
    function testExisteClase(){
        $this->assertTrue(class_exists("TemplateEngine"));
    }
    function testAddVariable(){
        $template=new TemplateEngine("index.template");
        $res=$template->addVariable("TITULO","soy un titulo");
        $this->assertEquals("soy un titulo",$res);
    }
    function testRender(){
        
    }

}