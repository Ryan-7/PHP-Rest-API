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

    $id = $_REQUEST['id'];
    $todo->removeTodo($id);

    $result = $todo->getTodos();

    echo json_encode($result->fetchAll(PDO::FETCH_OBJ));