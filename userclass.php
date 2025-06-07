<?php
class User {
    // Properties
    private $username;
    private $email;
    private $isAdmin;

    // Constructor
    public function __construct($username, $email, $isAdmin = false) {
        $this->username = $username;
        $this->email = $email;
        $this->isAdmin = $isAdmin;
    }
