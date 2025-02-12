<?php 
include 'connectingDB.php';
echo"<br>";
if($conn){
    echo"connected to database successfully";
}
else{
    echo"error";
}
echo"<br>";
$sql="INSERT INTO Student values('Sameer',10,'Kirtipur'),('Praj', 2,'Naikap'),('Abhinab',11,'Kalimati'),('Keshav',11,'Gamcha'),('Prabhat',12,'Thankot and Pharping'),('Hrithvik',15,'Sanepa')";
$result=mysqli_query($conn,$sql);
if($result){
    echo"data inserted into table successfully";
}
else{
    echo"error";
}
?>