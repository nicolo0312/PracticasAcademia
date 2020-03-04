<?php

include_once("LaVieja.php");

use Libreria\LaVieja;
use PHPUnit\Framework\TestCase;

final class LaViejaTest extends TestCase{
    public function testJugar(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("e");
        $jugar1=$lv->jugar("e");
        $this->assertTrue($jugar);
        $this->assertFalse($jugar1);
    }
    public function testMostrar(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("e");
        $mostrar= $lv->mostrar();
        $this->assertEquals(" _ e _  _  _ ",$mostrar);

    }
    public function testIntentosRestantes(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("e");
        $jugar1=$lv->jugar("u");
        $intentos=$lv->intentosRestantes();
        $this->assertEquals(4,$intentos);
    }

    public function testGano(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("e");
        $jugar1=$lv->jugar("g");
        $jugar=$lv->jugar("n");
        $jugar1=$lv->jugar("u");
        $jugar=$lv->jugar("i");
        $jugar1=$lv->jugar("o");
        $gano=$lv->gano();
        $this->assertTrue($gano);

    }
    public function testGano2(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("e");
        $jugar1=$lv->jugar("g");
        $jugar=$lv->jugar("n");
        $jugar1=$lv->jugar("u");
        $jugar1=$lv->jugar("o");
        $gano=$lv->gano();
        $this->assertFalse($gano);

    }
    public function testPerdio(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("l");
        $jugar1=$lv->jugar("a");
        $jugar=$lv->jugar("h");
        $jugar1=$lv->jugar("p");
        $jugar1=$lv->jugar("u");
        $perdio=$lv->perdio();
        $this->assertTrue($perdio);

    }
    public function testPerdio2(){
        $lv= new \Libreria\LaVieja("genio",5);
        $jugar=$lv->jugar("l");
        $jugar1=$lv->jugar("a");
        $jugar=$lv->jugar("h");
        $perdio=$lv->perdio();
        $this->assertFalse($perdio);

    }
    public function testTermino(){
    $lv= new \Libreria\LaVieja("genio",5);
    $jugar=$lv->jugar("e");
        $jugar1=$lv->jugar("g");
        $jugar=$lv->jugar("n");
        $jugar1=$lv->jugar("u");
        $jugar=$lv->jugar("i");
        $jugar1=$lv->jugar("o");
        $gano=$lv->gano();
        $termino=$lv->termino();
        $this->assertTrue($termino);

    }
}