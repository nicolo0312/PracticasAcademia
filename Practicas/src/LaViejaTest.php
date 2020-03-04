<?php
namespace Practica;


use PHPUnit\Framework\TestCase;

final class LaViejaTest extends TestCase{

    public function testJugar(){
        $lv= new \Practica\LaVieja("comer",5);
        $jugar= $lv->jugar("a");
        $this->assertTrue($jugar);
        $jugar= $lv->jugar("a");
        $this->assertFalse($jugar);
    }
    public function testMostrar(){
        $lv= new \Practica\LaVieja("comer",5);
        $jugar= $lv->jugar("c");
        $mostrar= $lv->mostrar();
        $this->assertEquals("c _  _  _  _ ",$mostrar);

    }
    public function testIntentosRestantes(){
        $lv= new \Practica\LaVieja("comer",5);
        $jugar= $lv->jugar("s");
        $intentos= $lv->intentosRestantes();
        $this->assertEquals(4,$intentos);
    }
}