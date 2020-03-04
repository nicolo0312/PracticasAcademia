<?php

namespace TestTuiter\Services;

use \Tuiter\Services\UserService;

final class UserServiceTest extends \PHPUnit\Framework\TestCase {
    private $collection;

    protected function setUp(): void{
        $conn = new \MongoDB\Client("mongodb://localhost");
        $this->collection[] = $conn->Tuiter->usuarios;
        $this->collection[] = $conn->Tuiter->usuarios2;
        $this->collection[] = $conn->Tuiter->usuarios3;
        $this->collection[] = $conn->Tuiter->usuarios4;
        $this->collection[] = $conn->Tuiter->usuarios5;
        foreach($this->collection as $v){
            $v->drop();
        }
        
    }


    public function testExisteClase() {
        $this->assertTrue(class_exists("\Tuiter\Services\UserService"));
    }
    public function testRegisterOk(){
        $us = new UserService($this->collection);
        $user= $us->register("mati23", "1234", "matias");
        $this->assertTrue($user);

    }
    public function testRegisterUsers(){
        $us = new UserService($this->collection);
        $user= $us->register("mati23", "1234", "matias");
        $this->assertTrue($user);
        $user2= $us->register("lucho23", "1234", "luciano");
        $this->assertTrue($user2);
    }
    public function testRegisterSameUser(){
        $us = new UserService($this->collection);
        $user= $us->register("mati23", "1234", "matias");
        $this->assertTrue($user);
        $user2= $us->register("mati23", "1234", "luciano");
        $this->assertFalse($user2);
    }

    public function testGetUser(){
        $us = new UserService($this->collection);
        $us->register("mati23", "1234", "matias");
        $user=$us->getUser('mati23');
        $this->assertEquals($user->getUserId(), 'mati23');
    }

    public function testGetUserNotExist(){
        $us = new UserService($this->collection);
        $us->register("mati23", "1234", "matias");
        $user=$us->getUser('culo44');
        $this->assertEquals($user->getUserId(), 'Null');
    }

    public function testAgregar1000Usuarios(){
        $us = new UserService($this->collection);
        
        for($i=0;$i<1000;$i++){
            $var=$us->register("usuario".$i,"1234".$i, "matias".$i);
            $this->assertTrue($var);
        }
    

        for($i=0;$i<1000;$i++){
            $gu=$us->getUser("usuario".$i);
            $this->assertEquals(new \Tuiter\Models\User("usuario".$i,"1234".$i, "matias".$i),$gu);
        }
    }

}