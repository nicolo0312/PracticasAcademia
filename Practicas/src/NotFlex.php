<?php
namespace Practica;

/**
 * Nos han pedido reemplazar la herramienta para mantener
 * el catalogo de peliculas de NotFlex porque el original
 * es muy malo. Pero como es un cambio muy grande en nuestra
 * primera entrega no hay que entregar todas las funcionalidades.
 * 
 * Las funcionalidades que nos piden son:
 *  - Agregar peliculas nuevas
 *  - Agregar series nuevas
 *  - Poder sacar peliculas
 *  - Poder sacar series
 *  - Listar por categoria
 *  - Una funcion que te dice si existe el id de pelicula/serie
 * 
 * Las categorias se van a ir creando a medida que se agregan
 * peliculas o series, entonces si se agrega una serie con la
 * categoria "ciencia misteriosa" esta categoría empieza a
 * existir en ese momento.
 * 
 * Tendremos que pasar todos los tests y tratemos de quedar
 * bien porque es nuestro primer cliente importante!
 */

class NotFlex {
  private $listaPeliculas=array();
  private $listaSeries=array();


  public function existeId($id) {
    foreach($this->listaSeries as $k=>$v){
      if (! empty($this->listaSeries[$id])){
        return True;
      }
    }
    foreach($this->listaPeliculas as $k=>$v){
      if (! empty($this->listaPeliculas[$id])){
        return True;
      }
  }
  return false;
  }

  public function agregarSerie($id, $nombre, $cantidadCapitulos, $categoria) {
    $this->listaSeries[$id]=array("nombre"=>$nombre,"cantidadCapitulos"=>$cantidadCapitulos,"categoria"=>$categoria);
    return $this->listaSeries;
  }

  public function agrearPelicula($id, $nombre, $tiempo, $categoria) {
    $this->listaPeliculas[$id]=array("nombre"=>$nombre,"tiempo"=>$tiempo,"categoria"=>$categoria);
  return $this->listaPeliculas;
  }

  public function sacarSerie($id) {
    foreach($this->listaSeries as $k=>$v){
      if(!empty($this->listaSeries[$id])){
        unset($this->listaSeries[$id]);
        return True;
      }else{
        return False;
      }
    }
    }
  
  public function sacarPelicula($id) {
    foreach($this->listaPeliculas as $k=>$v){
      if(!empty($this->listaPeliculas[$id])){
        unset($this->listaPeliculas[$id]);
        return True;
      }else{
        return False;
      }
    }
  }

  public function listarContenidoDeLaCategoria($categoria) {
    $cont=array();
    foreach($this->listaPeliculas as $k=>$v){
      if($v["categoria"]==$categoria){
        $cont[]=$this->listaPeliculas[$k];
       
      }
    }
    foreach($this->listaSeries as $j=>$v){
      if($v["categoria"]==$categoria){
        $cont[]=$this->listaSeries[$j];
       
      }
  }
  return $cont;

}
}