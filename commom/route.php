<?php

use App\Controllers\ProductController;
use Phroute\Phroute\RouteCollector;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Route;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];
$router = new RouteCollector();
$router->filter('auth', function () {
    if (!isset($_SESSION['auth']) || empty($_SESSION['auth'])) {
        header('location: ' . BASE_URL . 'login');
        die;
    }
});
$router->get('/', [App\Controllers\ProductController::class, 'index']);
$router->get('/them', [App\Controllers\ProductController::class, "them"]);
$router->get('/xoa', [App\Controllers\ProductController::class, "Delete"]);
$router->get('/sua', [App\Controllers\ProductController::class, "Update"]);
$router->post('/them', [App\Controllers\ProductController::class, "checkButton"]);
$router->post('/sua', [App\Controllers\ProductController::class, "checkButton"]);
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);
echo $response;
