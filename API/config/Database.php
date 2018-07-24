<?php

class Database {
    
    private $connection;

    public function connect() {
        $this->connection = null;

        /*
            PDO (PHP Data Objects) - An interface for talking to multiple databases with the same API, in this case, SQL.
        */

        try {
            $this->connection = new PDO('mysql:host=localhost; dbname=todo', 'root', 'admin');
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->connection;
    }

}