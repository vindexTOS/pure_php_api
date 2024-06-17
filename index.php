<?php

// Set headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Include necessary files
require_once 'api/Router/Requests.php';
require_once 'api/Controller/TestController.php';
require_once 'api/Services/TestService.php';

// Dependency injection
$testService = new TestService();
$testController = new TestController($testService);
$router = new Requests($testController);

// Handle incoming request
$method = $_SERVER['REQUEST_METHOD'];
$requestUri = $_SERVER['REQUEST_URI'];
$router->handleRequest($method, $requestUri);