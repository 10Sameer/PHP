<?php
session_start(); 


$_SESSION['username'] = 'cutiepie_boss';


echo "Welcome, " . $_SESSION['username'];
?>
