<?php
namespace Test;

use PHPUnit\Framework\TestCase;
final class UseServiceTest extends TestCase{
    public function testGetAllUsers(){
        $fs= new \Blogs\UseService();
        $get= $fs->getAllUsers();
        $this->assertCount(9,$get);
    }
    public function testUserExists(){
        $fs= new \Blogs\UseService();
        $exist=$fs->userExists("lean");
        $this->assertTrue($exist);

    }
    public function testSaveUsers(){
        $us= new \Blogs\UseService();
        $save= $us->saveUser("jesus");
        $this->assertFalse($save);

    }
}
