<?php
namespace Carritox\Paginas;
session_start();
class Logout implements \Library\Interfaces\Controller{
public function get($get,$post,&$session){
$session["log"]=False;
header("location:index.php?page=login");


}
public function post($get,$post,&$session){}
}