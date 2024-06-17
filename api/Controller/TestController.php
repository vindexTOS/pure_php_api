<?php


class TestController { 
    private $testService;
    
    public function __construct(TestInterface $testService) {
        $this->testService = $testService;
    }
    
    public function getPersons(){
        $this->testService->getPersons();
    }
    
    public function postPersons() {
        $this->testService->postPersons();
    }
}