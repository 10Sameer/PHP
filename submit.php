<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $email = $_POST['email'];
  $id=$_POST['id'];
  $hobbies=$_POST['hobbies'];
  $gender=$_POST['gender'];
  $country=$_POST['country'];
  
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
    echo "<br>";
  }
  
    
  if (empty($id)) {
    echo "id is empty";
  } else {
    echo $id;
    echo "<br>";

  }
  
  if (empty($email)) {
    echo "Email is empty";
  } else {
    echo $email;
    echo "<br>";

  }
    
  if (empty($hobbies)) {
    echo "Hobbies is empty";
  } else {
    echo $hobbies;
    echo "<br>";

  }
    
  if (empty($gender)) {
    echo "gender is empty";
  } else {
    echo $gender;
    echo "<br>";

  }
    
  if (empty($country)) {
    echo "Name is empty";
  } else {
    echo $country;
  }
}
?>