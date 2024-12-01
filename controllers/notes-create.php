<?php
use Core\Database;
use Core\Validator;
$config = require base_path("config.php");
$pdo = new Database($config["database"]);
$errors = [];
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $note = $_POST["body"];
    if(! Validator::string($note)){
        $errors["body"] = "You can not submit and an empty note";
    }

    if(empty($errors)){
        $query = "INSERT INTO notes (note, user_id) VALUES(:note, :id);";
        $pdo->query($query, ["note" => $note, "id" => 1]);
    }
}

view("notes-create.view.php", ["heading" => "Create a new note", "errors" => $errors]);