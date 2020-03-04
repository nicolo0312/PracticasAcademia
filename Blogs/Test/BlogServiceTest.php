<?php
namespace Test;
use PHPUnit\Framework\TestCase;
final class BlogServiceTest extends TestCase{
    public function testSavePost(){
    $save= new \Blogs\BlogService();
    $sp=$save->savePost("hola","leandro");
    $st= $save->savePost("los muchachos peronistas","nico");
    $this->assertFalse(!$sp);
    $this->assertFalse(!$st);
    }
    public function testGetAllPost(){
        $gap= new \Blogs\BlogService();
        $get= $gap->getAllPost("leandro");
        $this->assertTrue(!empty($get));
    }

}