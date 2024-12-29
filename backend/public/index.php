<?php 
require '../vendor/autoload.php';

$rootDirArray = explode('\\', __DIR__);
$rootDirArray = array_splice($rootDirArray, 0,-1);
define('BD', implode('\\', $rootDirArray) . '\\');

$router = require '../src/Routes/index.php';

