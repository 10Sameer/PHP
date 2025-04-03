<?php
function addMatrices($matrix1, $matrix2, $matrix3) {
    $rows = count($matrix1);
    $cols = count($matrix1[0]);
    $result = [];

    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j] + $matrix3[$i][$j];
        }
    }

    return $result;
}

function printMatrix($matrix) {
    foreach ($matrix as $row) {
        echo implode(" ", $row) . "\n";
    }
}

// Define three matrices
$matrix1 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$matrix2 = [
    [9, 8, 7],
    [6, 5, 4],
    [3, 2, 1]
];

$matrix3 = [
    [2, 3, 4],
    [5, 6, 7],
    [8, 9, 10]
];

// Add matrices
$resultMatrix = addMatrices($matrix1, $matrix2, $matrix3);

// Print result
echo "Sum of matrices:\n";
printMatrix($resultMatrix);
?>
