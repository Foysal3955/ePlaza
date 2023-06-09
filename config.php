<?php

session_start();
ini_set ('display errors','on');
error_reporting(E_ALL);

include_once($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
   d($var);
   die();
}
function set_session($key, $val){
    $_SESSION[$key] = $val;
}

function get_session($key){

    if(array_key_exists($key, $_SESSION) && !empty($_SESSION[$key])){
        return $_SESSION[$key];
    }
    return null;
}

function flush_session($key){
    $value = get_session($key);
    $_SESSION[$key]='';
    return $value; 
}

function kill_session(){
    session_destroy();
    $_SESSION = null;
    unset($_SESSION);
}

function redirect($url){
    header("location:$url");
}

function upload($target, $dastination){
    move_uploaded_file($target, $dastination);
    return true;
}

$webroot = "http://class_15.test".DIRECTORY_SEPARATOR;

$adminurl = $webroot."admin/layout_1/LTR/material/full".DIRECTORY_SEPARATOR; 
$frontendurl = $webroot."frontend/portal".DIRECTORY_SEPARATOR;
//$docroot = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$datasource = $docroot.DIRECTORY_SEPARATOR."datasource".DIRECTORY_SEPARATOR;
$partials = $docroot.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;

$uploads = $docroot.DIRECTORY_SEPARATOR."upload".DIRECTORY_SEPARATOR;
$uploaded_assets = $webroot."upload".DIRECTORY_SEPARATOR;



$datasource_driver = "JSON"; // "Database, XML(optional), COOKIE/Session (learning only)