<?php
$conn= mysqli_connect("localhost","root","");
if(!$conn){
    echo"error connecting to database.";
}
else{
    echo"succesfully connected to mysql";
}

?>