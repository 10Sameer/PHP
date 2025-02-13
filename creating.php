<?php
$conn= mysqli_connect("localhost","root","");
$sql="CREATE DATABASE INFORM";
$result=mysqli_query($conn,$sql);
if($result){
    echo"database created successfully";
}
else{
    echo"error creating database";
    echo"<br>";
}

?>