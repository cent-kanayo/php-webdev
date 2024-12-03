<?php
use Core\Database;
use \Core\App;

$pdo = App::resolver(Database::class);
$query = "SELECT * FROM `notes`";
$notes = $pdo->query($query)->fetchAll();
view("notes.view.php", ["heading" => "My notes", "notes" => $notes]);