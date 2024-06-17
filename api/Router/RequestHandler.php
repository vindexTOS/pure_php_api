<?php

include('Requests.php');

class RequestHandler extends Requests {
  
  
  public function handleRequest() {
    
    $method = $_SERVER['REQUEST_METHOD'];
    $requestUri = $_SERVER['REQUEST_URI'];
    
    
    
    
    
    
    
    switch($method){
      case "GET":
        $this->handleGetRequest($requestUri);
        break; 
        case "POST":
          $this->handlePostRequest($requestUri);
          break;
        }
        
      }
      //  
      
      private static $routes = [];
      
      
      
    }