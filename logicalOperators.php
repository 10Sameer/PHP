<?php
$a = 10;
$b = 15;

// AND operator
if ($a > 0 && $b > 0) {
    echo "Both a and b are positive.";
    echo"<br>";
}

// OR operator
if ($a > 0 || $b > 0) {
    echo "Either a or b is positive.";
    echo"<br>";
}

if ($a > 0 AND $b > 0) {
    echo "Both a and b are positive.";
    echo"<br>";
}

if ($a > 0 OR $b > 0) {
    echo "Either a or b is positive.";
    echo"<br>";
}


// XOR operator
if ($a > 0 xor $b > 0) {
    echo "Either a or b is positive, but not both.";
    echo"<br>";
}

//  not operator 
if(!($a<$b)){
    echo"a is greater than b";
    echo"<br>";
}
else{
    echo"a isnt greater than b";
}
?>