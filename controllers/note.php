<?php

$config = require_once 'config.php';
$db = new Database($config['database']);

$heading = "My Note";
$currentUserId = 1;

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->findOrFail();


authorize($note['user_id'] !== $currentUserId);

require_once "views/note.view.php";
