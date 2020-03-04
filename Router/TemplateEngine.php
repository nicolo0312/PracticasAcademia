<?php
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
        
        $res1="";
        $dentro=False;
        for($i=0;$i<strlen($res);$i=$i+1){
            if ($res[$i]=="{" && $res[$i+1]=="{"){
                $dentro=true;
            }
            if ($res[$i-2]=="}" && $res[$i-1]=="}"){
                $dentro=false;
            }
            if (!$dentro){
                $res1.=$res[$i];
            }
            
            
        }



            
        }
        function contarVariables(){
            $contador=0;
            $nuevo= $this->archivo;
            for ($i=0; $i<strlen($nuevo);$i=$i+1){

            }
        }
    
    
}