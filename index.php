<?php
header('Content-Type: text/html; charset=UTF-8');

session_start();

define('ROOT', $_SERVER["DOCUMENT_ROOT"]);
ini_set('display_errors', 0);
//error_reporting(E_ALL);

require_once(ROOT . '/vendor/autoload.php');

$router = new Router\Router();
$router->run();

