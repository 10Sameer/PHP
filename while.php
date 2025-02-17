<?php
$num = 1;
while ($num <= 10) {
    echo $num . " ";
    $num++;
}
?>

// For find the sum of even
<?php
$sum = 0;
$num = 2;

while ($num <= 20) {
    $sum += $num;
    $num += 2;
}

echo "Sum of even numbers from 1 to 20 is: " . $sum;
?>

// Example of prime number
<?php
$num = 29; 
$isPrime = true;
$divisor = 2;

if ($num < 2) {
    $isPrime = false;
} else {
    while ($divisor <= sqrt($num)) {
        if ($num % $divisor == 0) {
            $isPrime = false;
            break;
        }
        $divisor++;
    }
}

if ($isPrime) {
    echo "$num is a Prime Number";
} else {
    echo "$num is Not a Prime Number";
}
?>


//finding Out Reversed number
<?php
$num = 12345;  
$rev = 0;

while ($num > 0) {
    $digit = $num % 10; 
    $rev = ($rev * 10) + $digit;  
    $num = (int)($num / 10);  
}

echo "Reversed Number: " . $rev;
?>
