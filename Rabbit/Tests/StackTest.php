<?php
namespace Test;

use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase{

    public function testPush(){
        $stack= new \Clase\Stack();
        $push= $stack->push("elemento");
        $this->assertTrue($push);
    }
    public function testPop(){
        $stack= new \Clase\Stack();
        $push= $stack->push("elemento");
        $push= $stack->push("hola");
        $push= $stack->push("chau");
        $this->assertEquals("chau",$stack->pop());

    }
    public function testEmpty(){
        $stack= new \Clase\Stack();
        $push= $stack->push("elemento");
        $this->assertFalse($stack->empty());
        $pop=$stack->pop();
        $this->assertTrue($stack->empty());
    }   
}