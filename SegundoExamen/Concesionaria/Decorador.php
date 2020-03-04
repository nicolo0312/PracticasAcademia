<?php

class Decorador{
    private $concesionaria;
    private $cont;
    public function __construct(Concesionaria $concesionaria){
    $this->concesionaria=$concesionaria;
    $this->cont=0;
    }
    public function agregarAutos($idReferencia, $marca, $modelo, $anio, $precio) {
        $agregar=$this->concesionaria->agregarAutos($idReferencia, $marca, $modelo, $anio, $precio);
        return $agregar;   
    }
    public function mostrarAutosDeMarca($marca) {
        $mostrar=$this->concesionaria->mostrarAutosDeMarca($marca);
        return $mostrar;
    }
    public function venderAutoMarca($marca) {
        $antes = $this->totalGanado();
        $vender=$this->concesionaria->venderAutoMarca($marca);
        $despues = $this->totalGanado();
        $ganancia = $despues - $antes;
        if ($marca=="Cachavrolet"){
            $this->cont+=$ganancia;
        }
        return $vender;
    }
    public function totalGanado() {
        $total=$this->concesionaria->totalGanado();
        return $total;
    }
    public function getCont(){
        return $this->cont;
    }
}