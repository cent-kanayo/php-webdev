<?php 


$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");

$router->get("/notes", "controllers/notes.php");
$router->get("/notes/create", "controllers/notes-create.php");
$router->get("/note", "controllers/note.php");

$router->post("/notes", "controllers/store.php");
$router->delete("/note", "controllers/destroy.php");