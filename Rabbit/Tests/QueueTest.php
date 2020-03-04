<?php
namespace Test;

use PHPUnit\Framework\TestCase;

final class Queue extends TestCase{

    // public function testExisteClase(){
    //     $this->assert(class_exists("Queue"));
    // }
    
    public function testPut(){
        $queue= new \Clase\Queue();
        $put= $queue->put("algo");
        $this->assertTrue($put);
    }
    public function testGet(){
        $queue= new \Clase\Queue();
        $put= $queue->put("algo");
        $this->assertEquals("algo",$queue->get());
    }
    
    public function testSize(){
        $queue= new \Clase\Queue();
        $put= $queue->put("algo");
        $this->assertEquals(1,$queue->size());
        
    }
}