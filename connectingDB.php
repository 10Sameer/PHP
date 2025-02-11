<?php
$servername="localhost";
$username="root";
$password="";
$db="inform";
$conn=mysqli_connect($servername,$username,$password,$db);
if($conn){
    echo"connected to database inform successfully";
}
else{
    echo"error";
}
?>