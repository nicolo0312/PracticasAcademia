<?php
namespace Blogs;

class BlogService{
    public function savePost(String $content, String $user){
    $fileStore=new \Blogs\FileStore($user.".posts");
    $posts= $fileStore->read();
    $posts[]=$content;
    $save=$fileStore->save($posts);
    return $save;
    
    }
    public function getAllPost(String $user){
        $fileStore= new \Blogs\FileStore($user. ".posts");
        $posts=$fileStore->read();
        return $posts;


    }
}
