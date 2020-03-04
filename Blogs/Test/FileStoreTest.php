<?php
namespace Test;
// use \Blogs\FileStore;

use PHPUnit\Framework\TestCase;
final class FileStoreTest extends TestCase{
    public function testExisteLaClase(){
       $existe= new \Blogs\FileStore("nombre");
       $this->assertTrue(class_exists("\Blogs\FileStore"));

    }
    public function testSave(){
        $test= new \Blogs\FileStore("usuarios");
        $this->assertTrue($test->save("usuarios.text"));
    }




}
