<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


//System files connect
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

//Call Router
$router = new Router();
$router->run();


