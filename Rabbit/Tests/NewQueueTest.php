<?php
namespace Test;

use PHPUnit\Framework\TestCase;

final class NewQueueTest extends TestCase{
    
    public function testPut(){
        $nq= new \Clase\NewQueue();
        $put= $nq->put("hola");
        $this->assertTrue($put);
    }

    public function testGet(){
        $nq= new \Clase\NewQueue();
        $put= $nq->put("hola");
        $put= $nq->put("chau");
        $put= $nq->put("como");
        $this->assertEquals("hola", $nq->get());
        $this->assertEquals("chau",$nq->get());
    }


}