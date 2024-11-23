<?php
require "functions.php";
require "router.php";

$dns = "mysql:host=localhost;port=3306;user=root;dbname=myapp;charset=utf8mb4";
$pdo = new PDO($dns);

$query = "SELECT * FROM `posts`";
$statement = $pdo->prepare($query);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);
