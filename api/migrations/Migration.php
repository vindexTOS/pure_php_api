<?php

class Migration {
    protected $conn;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function run() {
        // Override in child classes
    }
}