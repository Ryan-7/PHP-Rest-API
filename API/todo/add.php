<?php

    // Add our headers
    // Keep public
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: Application/JSON');

    include_once '../config/Database.php';
    include_once '../models/Todo.php';

    $database = new Database();
    $db = $database->connect();

    $todo = new Todo($db);

    
    // WIP
    
    $content = file_get_contents("php://input");
    echo $content;