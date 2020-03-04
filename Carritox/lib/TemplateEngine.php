<?php
namespace Library;

class TemplateEngine{
    private $archivo;
    private $palabras=array();
    
    function __construct($file){
        $this->archivo=file_get_contents($file);
    }
    function addVariable($palabraConLlave,$palabraReemplazo){
        $palabraConLlave = "{{" . $palabraConLlave . "}}";
        $this->palabras[$palabraConLlave]=$palabraReemplazo;
        return $palabraReemplazo;
    }
    function render(){
        $res=$this->archivo;
     
        foreach($this->palabras as $palabraAntigua=>$palabraNueva){
           $res= str_replace($palabraAntigua,$palabraNueva,$res);
        }
        return $res;
        }
        function contarVariables(){
            $contador=0;
            $nuevo= $this->archivo;
            for ($i=0; $i<strlen($nuevo);$i=$i+1){

            }
        }
    
    
}