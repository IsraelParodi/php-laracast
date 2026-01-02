<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "My Note";

$note = $db->query("select * from notes where id = :id", ['id' => $_GET['id']])->fetch();

require_once "views/note.view.php";
