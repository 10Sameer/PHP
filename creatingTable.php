<?php
include 'connectingDB.php';
echo "<br>";
$sql="create table Student(sname varchar(30),sid int, saddress varchar(30))";
$result=mysqli_query($conn,$sql);
if($result){
    echo"table created successfully";
}
else{
    echo"error";
}
