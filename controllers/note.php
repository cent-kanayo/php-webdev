<?php
use Core\Database;
use \Core\App;

$pdo = App::resolver(Database::class);
$id = $_GET["id"];
$query = "SELECT * FROM `notes` WHERE id = :id";
$note = $pdo->query($query, ["id" => $id])->findOrfail();
view("note.view.php", ["heading" => "Single Note", "note" => $note]);