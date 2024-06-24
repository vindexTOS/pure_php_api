<?php



require_once __DIR__ . '/../config/Database.php';



$migrations = [
    __DIR__ . DIRECTORY_SEPARATOR .   "TestMigration.php"
];


$database = new Database();

$conn = $database->getConnection();


foreach($migrations as $migrationFile){
    if (file_exists($migrationFile)) {
        require_once $migrationFile;
        
        // Extract the class name from the filename
        $className = basename($migrationFile, '.php');
        if (class_exists($className)) {
            $migration = new $className($conn);
            $migration->run();
            echo "Ran migration: $className\n";
        } else {
            echo "Migration class $className not found in $migrationFile\n";
        }
    } else {
        echo "Migration file $migrationFile not found\n";
    }
}