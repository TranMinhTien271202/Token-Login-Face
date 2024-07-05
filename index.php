<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Define the path to the public directory
define('PUBLIC_DIR', __DIR__ . '/public');

// Set the `public` directory as the working directory
chdir(PUBLIC_DIR);

// Initialize and dispatch the router
require __DIR__ . '/routers/web.php';
