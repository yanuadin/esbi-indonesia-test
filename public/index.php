<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\App\Router;
use App\Controller\HomeController;
use App\Controller\ProductController;
use App\Middleware\AuthMiddleware;

//Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories');

Router::add('GET', '/user', \App\Controller\UserController::class, 'index',  [AuthMiddleware::class]);
Router::add('GET', '/user/create', \App\Controller\UserController::class, 'create',  [AuthMiddleware::class]);
Router::add('GET', '/user/edit/([0-9a-zA-Z]*)', \App\Controller\UserController::class, 'edit',  [AuthMiddleware::class]);
Router::add('POST', '/user/create', \App\Controller\UserController::class, 'store',  [AuthMiddleware::class]);
Router::add('POST', '/user/edit/([0-9a-zA-Z]*)', \App\Controller\UserController::class, 'update',  [AuthMiddleware::class]);
Router::add('POST', '/user/delete/([0-9a-zA-Z]*)', \App\Controller\UserController::class, 'delete',  [AuthMiddleware::class]);

Router::add('GET', '/', \App\Controller\AuthController::class, 'firstPage');
Router::add('GET', '/login', \App\Controller\AuthController::class, 'login');
Router::add('POST', '/login', \App\Controller\AuthController::class, 'loginProcess');
Router::add('GET', '/register', \App\Controller\AuthController::class, 'register');
Router::add('POST', '/register', \App\Controller\AuthController::class, 'registerProcess');
Router::add('GET', '/logout', \App\Controller\AuthController::class, 'logout');
//Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);
//Router::add('GET', '/about', HomeController::class, 'about');

Router::run();