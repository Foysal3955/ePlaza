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
$webroot = "http://class_15.test".DIRECTORY_SEPARATOR;
$adminurl = $webroot."admin/layout_1/LTR/material/full".DIRECTORY_SEPARATOR; 
$frontendurl = $webroot."frontend/view".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$datasource = $docroot.DIRECTORY_SEPARATOR."datasource".DIRECTORY_SEPARATOR;
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;