<?php

class Todo {
    private $connection;
    private $table = 'items';
    
    public $id;
    public $title;
    public $body;

    public function __construct($db) {
        $this->connection = $db;
    }

    public function getTodos() {
        $query = 'SELECT * FROM items';

        /* 
            PDO Prepared Statement - prevent SQL injection, can be executed multiple times with different parameters.
        */
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function removeTodo($id) {
        $query = 'DELETE FROM items WHERE id = :id';
        $stmt = $this->connection->prepare($query);
        $stmt->execute(['id' => $id]);
    }
}