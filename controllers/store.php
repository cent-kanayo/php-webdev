<?php

use Core\Validator;
use Core\Database;
use \Core\App;

$pdo = App::resolver(Database::class);
$errors = [];
$note = $_POST["body"];
if (! Validator::string($note)) {
    $errors["body"] = "You can not submit and an empty note";
}

if (! empty($errors)) {
    return view("notes-create.view.php", ["heading" => "Create a new note", "errors" => $errors]);
}

$query = "INSERT INTO notes (note, user_id) VALUES(:note, :id);";
$pdo->query($query, ["note" => $note, "id" => 1]);

header("location: /notes");
