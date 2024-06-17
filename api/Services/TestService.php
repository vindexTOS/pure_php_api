<?php

include(__DIR__ . '/../Interface/TestInterface.php');

class  TestService implements TestInterface {
    public function getPersons() {
        // Handle GET request for /persons
        http_response_code(200);
        echo json_encode(['message' => 'GET request for /persons handled']);
    }
    
    public function postPersons() {
        // Handle POST request for /persons
        http_response_code(200);
        echo json_encode(['message' => 'POST request for /persons handled']);
    }
}