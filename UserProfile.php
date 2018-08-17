<?php

class UserProfile
{
    private $logger;
    public function __construct(Logger $log) {
        $this->logger = $log;    
    }
    public function createUser() {
        $this->logger->log('User is created');
    }
    public function updateUser() {
        $this->logger->log('User is updated.');
    }
    public function deleteUser() {
        $this->logger->log('User is deleted.');
    }
}

