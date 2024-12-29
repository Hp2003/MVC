<?php

use App\Controllers\HomeController;
use App\Router;
use Lib\Config\Config;
use Lib\Logger\Logger;

Router::get('/', HomeController::class, 'index');
Logger::log('my custom logger', 'error');
Router::dispatch();