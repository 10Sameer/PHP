<?php
session_start(); // Start the session

// Set a session variable
$_SESSION['username'] = 'cutiepie_boss';

// Access the session variable
echo "Welcome, " . $_SESSION['username'];
?>
