<?php
include_once ("../lib/TemplateEngine.php");

$te= new templateEngine("../templates/inicio.html");
echo $te->render();
