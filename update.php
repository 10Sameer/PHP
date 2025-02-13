<?php
include 'connectingDB.php';
echo"<br>";
$sql="UPDATE Student SET sname='Sameer' where sid=1 ";
$result=mysqli_query($conn,$sql);
if($result){
    echo"table updated successfully";
}
else{
    echo "ERROR: Could not update table. " ;
}
?>