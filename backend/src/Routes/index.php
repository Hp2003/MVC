<?php

use App\Controllers\HomeController;
use App\Router;
use Lib\Config\Config;


Router::get('/', HomeController::class, 'index');

print_r( Config::get('view.admin') );
Router::dispatch();