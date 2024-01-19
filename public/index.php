<?php
include __DIR__ . '/../functions.php';

// var_dump('<pre>');
// dd($_SERVER);
// dd($_SERVER['REQUEST_URI']);
// var_dump('</pre>');

$routes = [
    "/" => 'functions/homepage.php',
    "/about" => 'functions/about.php'
];

$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)) {
    include __DIR__ . '/../' . $routes[$route];
    exit;
} else {
    dd(404);
}

