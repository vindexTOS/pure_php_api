<?php
// api/Person.php
class Person {
    private $conn;
    private $table_name = "persons";
    
    public $id;
    public $name;
    public $email;
    
    public function __construct($db) {
        $this->conn = $db;
    }
    
    public function read() {
        $query = "SELECT id, name, email FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}