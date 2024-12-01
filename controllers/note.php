<?php
use Core\Database;
$config = require base_path("config.php");
$pdo = new Database($config["database"]);
$id = $_GET["id"];
$query = "SELECT * FROM `notes` WHERE id = :id";
$note = $pdo->query($query, ["id" => $id])->findOrfail();
view("note.view.php", ["heading" => "Single Note", "note" => $note]);