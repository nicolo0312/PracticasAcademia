<?php


/**
 * Cantidad de bicicletas te dice cuantas bicicletas podes armar.
 * Para armar una bicicleta necesitas 2 ruedas, 1 cuadro y 1 volante.
 */
class Bicicleteria
{
    private $bicicletas = 0;
    private $ruedas = 0;
    private $cuadro = 0;
    private $volante = 0;
    public function __construct()
    {
    }

    public function agregarRuedas($cantidad)
    {
        $i = 0;
        while ($i < $cantidad) {
            $this->ruedas = $this->ruedas + 1;
            $i = $i + 1;
        }
        return $this->ruedas;
    }

    public function sacarRuedas($cantidad)
    {
        if ($this->ruedas >= $cantidad) {
            $this->ruedas = $this->ruedas - $cantidad;
            return $this->ruedas;
        }
        return null;
    }

    public function agregarCuadro($cantidad)
    {
        $i = 0;
        while ($i < $cantidad) {
            $this->cuadro = $this->cuadro + 1;
            $i = $i + 1;
        }
        return $this->cuadro;
    }

    public function sacarCuadro($cantidad)
    {
        if ($this->cuadro >= $cantidad) {
            $this->cuadro = $this->cuadro - $cantidad;
            return $this->cuadro;
        }
        return null;
    }

    public function agregarVolante($cantidad)
    {
        $i = 0;
        while ($i < $cantidad) {
            $this->volante = $this->volante + 1;
            $i = $i + 1;
        }
        return $this->volante;
    }



    public function sacarVolante($cantidad)
    {
        if ($this->volante >= $cantidad) {
            $this->volante = $this->volante - $cantidad;
            return $this->volante;
        }
        return null;
    }

    public function cantidadBicicletas()
    {
        $cantBicis = $this->bicicletas;
        $cantRuedas = $this->ruedas;
        $cantVolantes = $this->volante;
        $cantCuadros = $this->cuadro;
        while ($cantRuedas > 1 && $cantVolantes > 0 && $cantCuadros > 0) {
            $cantRuedas = $cantRuedas - 2;
            $cantVolantes = $cantVolantes - 1;
            $cantCuadros = $cantCuadros - 1;
            $cantBicis = $cantBicis + 1;
        }
        return $cantBicis;
    }
}
