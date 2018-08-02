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

    $content = file_get_contents("php://input");
    $trimData = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $content); // Something clientside might be messing with the JSON string..?
    $decoded = json_decode($trimData, true);
    
    $todo->addTodo($decoded['title'], $decoded['body']);

    $result = $todo->getTodos();
    echo json_encode($result->fetchAll(PDO::FETCH_OBJ));