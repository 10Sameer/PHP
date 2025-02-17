<?php

use LDAP\Result;

 function static_var()
 {
    static $num1=3;  //static variable
    static $num2=6;  //non-static variable
    //increment in non-static variable
    $num1++;
    //increment in static variable
    $num2++;
    echo"Static:".$num1."</br>";
    echo"Non-Static:".$num2."</br>";

 }

 //first function call
 static_var();  //return result num1=4 and num2=7

 static_var();  //return result num1=5 and num2=8

 ?>