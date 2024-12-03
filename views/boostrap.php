<?php 
use \Core\App;
use Core\Container;
use \Core\Database;

$container = new Container();

$container->bind(Database::class, function(){
    $config = require base_path("config.php");
    $pdo = new Database($config["database"]);
    return $pdo;
});

App::setContainer($container);