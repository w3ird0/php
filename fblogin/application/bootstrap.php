<?php 
 
/* Report all errors directly to the screen for simple diagnostics in the dev environment */  
error_reporting(E_ALL | E_STRICT);  
ini_set('display_startup_errors', 1);  
ini_set('display_errors', 1); 
 
/* Add the Zend Framework library to the include path so that we can access the ZF classes */ 
set_include_path('../library' . PATH_SEPARATOR . get_include_path());  
 
/* Set up autoload so we don't have to explicitely require each Zend Framework class */ 
require_once "Zend/Loader.php"; 
Zend_Loader::registerAutoload(); 
 
/* Set the singleton instance of the front controller */ 
$frontController = Zend_Controller_Front::getInstance(); 
/* Disable error handler so it doesn't intercept all those errors we enabled above */ 
$frontController->throwExceptions(true); 
/* Point the front controller to your action controller directory */ 
$frontController->setControllerDirectory('../application/controllers'); 
/* OK, do your stuff, front controller */ 
$frontController->dispatch();