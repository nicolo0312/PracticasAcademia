<?php 
namespace Blogs;

class FileStore{
    private $archivo;
    public function __construct($file){
        $this->archivo=$file;
    }
    public function save(array $file){ 
        if (empty($file)){
            return False;}
            $implode=implode("\n",$file);
            $save=file_put_contents($this->archivo,$implode);
            if($save!=false){
                return True;
            }
            else{
            return $save;
            }
    }
    public function read(){
        if (!file_exists($this->archivo)){
            file_put_contents($this->archivo,"");
        }
        
            $fileget= explode("\n", file_get_contents($this->archivo));
        return $fileget;
            
            
    }

}