<?php
include_once ("../lib/TemplateEngine.php");

$te= new TemplateEngine("../templates/categorias.html");
echo $te->render();
