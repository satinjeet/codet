<?php

include_once 'Content.php';
$requestedRoute = $_REQUEST['route'];

$routes = array(
    "tuts" => "tuts",
    "home" =>  "home",
    "aboutus" => "aboutus"
);

$page = $routes[$requestedRoute];

echo Content::render($page);

