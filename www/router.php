<?php

require 'application/system/Environment.php';

$controller = $_GET['Controller'];
$action = $_GET['Action'];
$controller = Giftr\System\Page::Controller($controller.'.php');
$controller->$action();
?>