<?php
$num = 5; 
$factorial = 1;
$i = $num;

do {
    $factorial *= $i;
    $i--;
} while ($i > 0);

echo "Factorial of $num is: " . $factorial;
?>

// reverse a string
<?php
$str = "PHP";  
$reversed = "";
$length = strlen($str);
$i = $length - 1;

do {
    $reversed .= $str[$i];  
    $i--;
} while ($i >= 0);

echo "Reversed String: " . $reversed;
?>
