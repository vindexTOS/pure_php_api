<?php
include("Migration.php");

class TestMigration extends Migration {
    
    public function run (){
        
        $query = "CREATE TABLE IF NOT EXISTS person (
        id INT AUTO_INCREMENT PRIMARY KEY, 
        name VARCHAR(100) NOT NULL
        );";
        
        $this->conn->exec($query);
    }
}