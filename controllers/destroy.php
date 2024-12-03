<?php

use Core\Database;
use \Core\App;

$pdo = App::resolver(Database::class);

$errors = [];
$id = $_POST["note-id"];
$query = "SELECT * FROM `notes` WHERE id = :id";
$note = $pdo->query($query, ["id" => $id])->findOrfail();
if (! $note) {
    $errors["body"] = "Couldn't find a matching note";
}

if (! empty($errors)) {
    return view("notes.view.php", ["heading" => "Notes"]);
}

$query = "DELETE FROM `notes` WHERE id = :id";
$note = $pdo->query($query, ["id" => $id]);

header("location: /notes");
