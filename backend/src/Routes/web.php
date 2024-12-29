<?php
/**
 * All routes for web should be declared here
 */
use App\Controllers\HomeController;
use App\Router;

Router::get('/', HomeController::class, 'index');
Router::dispatch();