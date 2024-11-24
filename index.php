<?php
require "functions.php";
require "router.php";
require "Database.php";

$config = require("config.php");
$pdo = new Database($config["database"]);

$query = "SELECT * FROM `posts`";
$statement = $pdo->query($query)->fetchAll();
