<?php
include 'connectingDB.php';
echo "<br>";
$sql="DELETE FROM Student WHERE SID=12";
$result=mysqli_query($conn,$sql);
if($result){
    echo"COLUMN DELETED successfully";
}
else{
    echo "ERROR: Could not delete. " ;
}
?>