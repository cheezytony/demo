<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

function error($code, $message = null) {
    http_response_code($code);
    die();
}

function success($data, $name) {
    return json_encode([
        "success" => true,
        $name => $data
    ]);
}

function response($response){
    header("Content-Type: application/json");
    echo $response;
}

// Fetch Defined Routes
$routes = require_once "routes.php";
$api_routes = $routes["api"];

// Get Current Request URI
$uri = $_SERVER["REQUEST_URI"];

// Remove Trailing Slashes From Uri
$uri = preg_replace("~(^\/|\/$)~", "", $uri);

$uri = preg_replace("~^api/~", "", $uri);

// Get Requested Route
$route = array_key_exists($uri, $api_routes);

if (!$route) {
    echo "<br>404</br>";
    error(404);
}

$route = $api_routes[$uri];

$action = $route["action"];


// Fetch All Defined Actions
require_once "actions.php";

if (!function_exists($action)) {
    error("500");
}

call_user_func($action);