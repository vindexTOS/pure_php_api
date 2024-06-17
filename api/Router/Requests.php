<?php 
include("Controller/TestController.php");

class Requests { 
    private $testController;
    
    public function __construct(TestController $testController) {
        $this->testController = $testController;
    }
    
    public function handleRequest($method, $requestUri) {
        switch ($method) {
            case 'GET':
                $this->handleGetRequest($requestUri);
                break;
                case 'POST':
                    $this->handlePostRequest($requestUri);
                    break;
                    default:
                    http_response_code(405); // Method Not Allowed
                    echo json_encode(['error' => 'Method not supported']);
                    break;
                }
            }
            
            private function handleGetRequest($requestUri) {
                switch ($requestUri) {
                    case "/persons":
                        $this->testController->getPersons();
                        break;
                        default:
                        http_response_code(404); // Not Found
                        echo json_encode(['error' => 'Route not found']);
                        break;
                    }
                }
                
                private function handlePostRequest($requestUri) {
                    switch ($requestUri) {
                        case "/persons":
                            $this->testController->postPersons();
                            break;
                            default:
                            http_response_code(404); // Not Found
                            echo json_encode(['error' => 'Route not found']);
                            break;
                        }
                    }
                }