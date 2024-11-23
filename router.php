<?php
$uri = parse_url($_SERVER["REQUEST_URI"])["path"]; 
$routes = ["/" => "controllers/index.php", 
"/about" => "controllers/about.php", 
"/contact" => "controllers/contact.php"];


function handleRouter($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        require "views/404.php";
        die();
    }
}

handleRouter($uri, $routes);