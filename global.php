<?php
 $name="Sameer Bhandari";
 function global_var()
 {
    global $name;
    echo"Variable inside the function:".$name;
    echo"</br>";
 }
 global_var();
 echo"Variable outside the function:".$name;
 ?>