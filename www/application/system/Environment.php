<?php
$controller = null;
$model = null;
require "Application.php";
require "Configuration.php";
require "Database.php";
require "Page.php";
require "Controller.php";
require "Session.php";
require "Security.php";

use Giftr\System as System;

//require System\Application::basePath().'/application/data/GMRCurrentUser.php';
require System\Application::basePath().'/application/libs/axismundi/data/AMQuery.php';
//require System\Application::basePath().'/application/data/GMRUser.php';

/*
	TODO Before production needs to set the Zend Framework path in the ini manually so we don't need this call:
*/

// will probably handle this in the php.ini (Zend Framework Path) on the server once it comes time.. 
// for now just dynamically setting it up for the Zend Framework.
// Using Zend Framework for Amazon S3
// set_include_path(get_include_path() . PATH_SEPARATOR . GMRApplication::basePath().'/application/libs');

date_default_timezone_set('America/Los_Angeles');

new System\Application();
System\Application::startSession();
?>