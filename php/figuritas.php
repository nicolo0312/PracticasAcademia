<?php
function crearAlbum($n){
  $lista=array();
  $i=0;
  while ($i<$n){
    $lista[]=0;
    $i=$i+1;}
  return $lista;}
//$album=crearAlbum(6);
//print_r($album);

function comprarFigu($figus_total){
    $figu=random_int(1,count($figus_total));
    return $figu;
}
$comprafigu=(comprarFigu(crearAlbum(6)));
//print_r($comprafigu);
function estaLleno($figus_total){
  if  (in_array(0,$figus_total)){
    return false;
  }
return true;  
}

function cuantasFigus($figus_total){
    $contador=0;
    while(!estaLleno($figus_total)){
        $figus=comprarFigu($figus_total);
        $figus_total[$figus-1]=1;
        $contador=$contador+1;
        
    }
    return $contador;
  }

$cuantas=cuantasFigus(crearAlbum(6));
//print_r($cuantas);


function repeticiones($n){
  $lista=array();
  $i=0;
  while ($i<$n){
    $lista[]=cuantasFigus(crearAlbum(6));
    $i+=1;

  }
  $promedio= array_sum($lista)/count($lista);
  //print_r($promedio);
  return $lista;
}
$rep=repeticiones(100);
//print_r($rep);

function generarPaquete($figus_total,$figus_paquete){
  $paquete=array();
  $i=0;
  while ($i<$figus_paquete){
    $paquete[]=comprarFigu(crearAlbum(6));
    $i+=1;
  }
  return $paquete;
}

function cuantosPaquetes($figus_total,$figus_paquete){
  $contador=0;
  while(!estaLleno($figus_total)){
    $k=0;
    while($k<$figus_paquete){
      $pac=generarPaquete($figus_total,$figus_paquete);
      $unaFigu=$pac[$k];
      $figus_total[$unaFigu-1]=1;
      $k+=1;
    }
    $contador+=1;

  }
  return $contador;

}
$cuantosPaq=cuantosPaquetes(crearAlbum(6),5);
print_r($cuantosPaq);

    

?>





