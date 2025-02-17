<!-- Using array -->
<?php 
 $num1=5;
 $num2=13;
 function global_var()
 {
    $sum=$GLOBALS['num1']+$GLOBALS['num2'];
    echo"Sum of global variable is:".$sum;
 }
 global_var();
 ?>