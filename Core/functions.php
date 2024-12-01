<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER["REQUEST_URI"] === $value;
}

function abort($code = 404){
    require "views/{$code}.php";
    exit;
}

function base_path ($path){
    return BASE_PATH . $path;
}

function view ($page, $attributes) {
    extract($attributes);
    require base_path("views/" . $page);
}