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

    // Method to display user info
    public function getProfile() {
        return "Username: {$this->username}, Email: {$this->email}";
    }

    // Method to check if user is admin
    public function isAdmin() {
        return $this->isAdmin ? "Yes" : "No";
    }

    // Setters
    public function setEmail($newEmail) {
        $this->email = $newEmail;
    }
}

// Create a user
$user1 = new User("Sameer", "sameerHero@gmail.com");

// Use the class methods
echo $user1->getProfile(); 
echo "<br>";
echo "Is Admin? " . $user1->isAdmin(); 
?>
