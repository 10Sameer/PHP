<?php

$matrix1 = [
    [10, 20, 30, 40, 50],
    [15, 25, 35, 45, 55],
    [5, 10, 15, 20, 25],
    [1, 2, 3, 4, 5],
    [9, 8, 7, 6, 5]
];

$matrix2 = [
    [1, 2, 3, 4, 5],
    [5, 5, 5, 5, 5],
    [2, 4, 6, 8, 10],
    [1, 1, 1, 1, 1],
    [5, 4, 3, 2, 1]
];

// Initialize result matrix
$result = [];

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $result[$i][$j] = $matrix1[$i][$j] - $matrix2[$i][$j];
    }
}

// Print the result
echo "Result of Matrix Subtraction:<br>";
foreach ($result as $row) {
    foreach ($row as $value) {
        echo $value . "\t";
    }
    echo "<br>";
}
?>
