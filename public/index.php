<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Core\Router;

// Initialize the router
$router = new Router();

// Define your routes
require __DIR__ . '../../routers/web.php';

// Dispatch the router to handle the request
$router->dispatch();
