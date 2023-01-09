<?php

function render($templateName, $data){

extract($data);


ob_start();
require_once ("template/${templateName}.html.php");

$pageContent = ob_get_clean();

ob_start();

require_once ('template/base.html.php');

echo ob_get_clean();
}

function redirect($url){
header("Location: ${url}");
exit();

}