<?php

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

class CatalogoNotFlex {
  /**
   * Esta funcion solo nos dice si existe la pelicula o serie con
   * el id que nos pasan
   */
  private $listaSerie=array() ; 
  private $listaPelicula=array() ; 


  public function existeId($id) {
    foreach($this->listaPelicula as $k=>$v){
        if (! empty($this->listaPelicula[$id])){
            return true;
        }
    }
    
    foreach($this->listaSerie as $k=>$v){
        if (!empty($this->listaSerie[$id])){
            return true;
        }        
    }
    return false;

    

  }

  public function agregarSerie($id, $nombre, $cantidadCapitulos, $categoria) {
      $this->listaSerie[$id]=array("nombre"=> $nombre, "cantidadCapitulos"=>$cantidadCapitulos,"categoria"=>$categoria );
        return $this->listaSerie;
    }


  public function agrearPelicula($id, $nombre, $tiempo, $categoria) {
    $this->listaPelicula[$id]=array("nombre"=> $nombre, "tiempo"=>$tiempo,"categoria"=>$categoria );
    return $this->listaPelicula;
  }

  public function sacarSerie($id) {
    if (!empty($this->listaSerie[$id])){
        unset($this->listaSerie[$id]);
        return True;
    }
    return false;
  }

  public function sacarPelicula($id) {
    if (!empty($this->listaPelicula[$id])){
        unset($this->listaPelicula[$id]);
        return True;
    }
    return false;
}
      
  

  public function listarContenidoDeLaCategoria($categoria) {
      $contador=array();
      foreach($this->listaSerie as $k=>$cat){
          if ($cat["categoria"]==$categoria){
              $contador[]=$this->listaSerie[$k];
          }

      }
      foreach($this->listaPelicula as $id=>$v){
        if ($v["categoria"]==$categoria){
            $contador[]=$this->listaPelicula[$id];
        }

    }
    return $contador;



  }

}