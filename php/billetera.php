<?php

$billetes=array(2=>0,5=>0,10=>0,20=>7,50=>0,100=>0,500=>0,1000=>0); 

$billete=20;
$cantidad=5;

$billetes[$billete]= $cantidad+$billetes[$billete] ;

print_r($billetes);
