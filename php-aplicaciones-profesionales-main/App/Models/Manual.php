<?php
namespace App\Models;

class Manual {

    private $connection;

    public function __construct() {
        $this->connection = Connection::getInstance()->getConnection();
    }
    
    public function getAll() {
        $ssql = "select * from manuals";
        $result = $this->connection->query($ssql);
        return $result->fetchAll();
    }
}