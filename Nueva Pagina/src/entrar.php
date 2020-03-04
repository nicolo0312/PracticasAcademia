<?php
session_start();

include_once ("../lib/TemplateEngine.php");

$te=new TemplateEngine ("../templates/index.html");
echo $te->render();




