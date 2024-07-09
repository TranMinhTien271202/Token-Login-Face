<?php

use App\Controllers\CampaignController;
use App\Controllers\ExampleController;
use App\Controllers\EnvController;
use App\Controllers\ErrorController;
use App\Controllers\FaceBookController;
use Core\Router;
use Core\Controller;

$router = new Router();
// Define your routes
$router->get('/', function() {
    $controller = new ExampleController();
    $controller->index();
});

$router->get('/example', function() {
    $controller = new ExampleController();
    $controller->example();
});

$router->get('/env', function() {
    $controller = new EnvController();
    $controller->env_index();
});

// auth face
$router->get('/auth/face', function() {
    $controller = new FaceBookController();
    $controller->FB_index();
});

$router->get('/auth/face/callback', function() {
    $controller = new FaceBookController();
    $controller->FB_callback();
});

//campaign
$router->get('/campaigns', function() {
    $controller = new CampaignController();
    $controller->CP_index();
});

$router->post('/campaigns/create', function() {
    $controller = new CampaignController();
    $controller->CP_CampaignCreate();
});

$router->get('/campaigns/adsets', function() {
    $controller = new CampaignController();
    $controller->CP_adset();
});

$router->get('/campaigns/ads', function() {
    $controller = new CampaignController();
    $controller->CP_ads();
});

//api
$router->get('/json', function() {
    $controller = new ExampleController();
    $controller->json();
});

// 404
$router->get('/errors/404', function() {
    $controller = new ErrorController();
    $controller->ER_index();
});
// Add more routes here
$router->dispatch();
