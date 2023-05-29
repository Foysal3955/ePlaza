<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}

$docroot = $_SERVER['DOCUMENT_ROOT'];
$datasource = $docroot.'/'."frontend/datasource".'/';
//dd($datasource);
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;

$myroot = $docroot.DIRECTORY_SEPARATOR.'http://class_15.test'.DIRECTORY_SEPARATOR;

?>