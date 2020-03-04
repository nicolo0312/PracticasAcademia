<?php
require_once("TemplateEngine.php");
$te=new TemplateEngine("index.template");
$te->addVariable("titulo","soy un titulo");


echo $te->render();