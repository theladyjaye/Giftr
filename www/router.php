<?php

// 

require 'application/system/Environment.php';
use Giftr\System;
if(!isset($_GET['Controller']))
{
	header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
	exit;
}

$controller = $_GET['Controller'];

$action     = isset($_GET['Action'])? $_GET['Action'] : "index";
$controller = Giftr\System\Page::Controller($controller.'.php');

if(method_exists($controller, $action))
{
	$view = $controller->$action();
	$view->render();
}
else
{
	header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
	exit;
}
?>