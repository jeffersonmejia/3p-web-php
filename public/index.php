<?php
require __DIR__ . "/../framework/Database.php";

$db = new Database();

$routes = require __DIR__ . '/../routes/web.php';
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $routes[$requestUri] ?? null;

/*echo var_dump($requestUri);
die();*/
if ($route) {
	require __DIR__ . '/../' . $route;
} else {
	http_response_code(404);
	echo "404 not found";
}
