<?php
namespace Blogs;

class UseService{
    public function getAllUsers() {
        $fs = new \Blogs\FileStore('usuarios.data');
        $usuarios = $fs->read();
        return $usuarios;
      }

      public function userExists(string $user) {
        $usuarios = $this->getAllUsers();
        foreach($usuarios as $u) {
          if ($u == $user) {
            return true;
          }
        }
        return false;
      }
      public function saveUser(string $user) {
        $usuarios = $this->getAllUsers();
        if($this->userExists($user)==False){
        $usuarios[]=$user;
        $fileStore= new \Blogs\FileStore("usuarios.data");
        $fileStore->save($usuarios);
        return True;
        }else{
            return False;
        }
        
        
      }
}