<?php
use Core\Database;
$config = require base_path("config.php");
$pdo = new Database($config["database"]);
$query = "SELECT * FROM `notes`";
$notes = $pdo->query($query)->fetchAll();
view("notes.view.php", ["heading" => "My notes", "notes" => $notes]);