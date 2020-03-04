<?php
require_once("./vendor/autoload.php");
require_once("./Lavieja.php");

use PHPUnit\Framework\TestCase;
final class LaviejaTest extends TestCase{
    function testExisteLavieja(){
        $this->assertTrue(class_exists("Lavieja"));
    }
    function testExisteTablero(){
        $lavieja=new Lavieja ();
        $this->assertTrue(!(empty($lavieja->mostrar())));
    }
    
    function testTamañoTablero(){
        $lavieja=new Lavieja();
        $tablero=$lavieja->mostrar();
        $this->assertEquals(3,count($tablero[0]));
        $this->assertEquals(3,count($tablero[1]));
        $this->assertEquals(3,count($tablero[2]));
    }
        
    function testElementoEnPosicion(){
        $lavieja=new Lavieja();
        $tablero=$lavieja->mostrar();
        $this->assertEquals(" ",$tablero[0][0]);
        $this->assertEquals(" ",$tablero[0][1]);
        $this->assertEquals(" ",$tablero[0][2]);
        $this->assertEquals(" ",$tablero[1][0]);
        $this->assertEquals(" ",$tablero[1][1]);
        $this->assertEquals(" ",$tablero[1][2]);
        $this->assertEquals(" ",$tablero[2][0]);
        $this->assertEquals(" ",$tablero[2][1]);
        $this->assertEquals(" ",$tablero[2][2]);
    }
    function testExisteJugarO(){
    $lavieja=new Lavieja();
    $lavieja->jugarO(0,0);
    $this->assertTrue(true);
    }
    function testSePuedeJugarO(){
        $lavieja=new Lavieja();
        $lavieja->jugarO(0,0);
        $tablero=$lavieja->mostrar();
        $this->assertEquals("o",$tablero[0][0]);
    }

    function testSePuedeJugarX(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(0,1);
        $lavieja->jugarX(2,1);
        $tablero=$lavieja->mostrar();
        $this->assertEquals("x",$tablero[0][1]);
        $this->assertEquals("x",$tablero[2][1]);
    }
    function testGanoXHorizontal(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(0,0);
        $lavieja->jugarX(0,1);
        $lavieja->jugarX(0,2);
       
        
        $this->assertTrue($lavieja->ganoX());
    }

    function testGanoXHorizontal2(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(1,0);
        $lavieja->jugarX(1,1);
        $lavieja->jugarX(1,2);
        $this->assertTrue($lavieja->ganoX());

    }
    function testGanoXHorizontal3(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(2,0);
        $lavieja->jugarX(2,1);
        $lavieja->jugarX(2,2);
        $this->assertTrue($lavieja->ganoX());

    }

    function testGanoXVertical(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(0,0);
        $lavieja->jugarX(1,0);
        $lavieja->jugarX(2,0);
        $this->assertTrue($lavieja->ganoX());

    }
    function testGanoXVertical2(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(0,1);
        $lavieja->jugarX(1,1);
        $lavieja->jugarX(2,1);
        $this->assertTrue($lavieja->ganoX());
    }
    function testGanoXVertical3(){
        $lavieja=new Lavieja();
        $lavieja->jugarX(0,2);
        $lavieja->jugarX(1,2);
        $lavieja->jugarX(2,2);
        $this->assertTrue($lavieja->ganoX());
    }
    
    function testGanoOHorizontal(){
        $lavieja=new Lavieja();
        $lavieja->jugarO(0,0);
        $lavieja->jugarO(0,1);
        $lavieja->jugarO(0,2);
        $this->assertTrue($lavieja->ganoO());
    }
    
    /* function testGano; */
        

    
}
