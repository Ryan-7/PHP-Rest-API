<?php

    // Add our headers
    // Keep public
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: Application/JSON');

    include_once '../config/Database.php';
    include_once '../models/Todo.php';

    // Create DB object from Class

    $database = new Database();
    $db = $database->connect();

    // Todo Object
    $todo = new Todo($db);

    // Query all todos
    $result = $todo->getTodos();

    echo json_encode($result->fetchAll(PDO::FETCH_OBJ)); // FETCH_OBJ will allow us to fetch object by default instead of array

    