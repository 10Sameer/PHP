<?php
function multiplyMatrices($matrix1, $matrix2) {
    $rows1 = count($matrix1);
    $cols1 = count($matrix1[0]);
    $rows2 = count($matrix2);
    $cols2 = count($matrix2[0]);

    if ($cols1 != $rows2) {
        die("Matrix multiplication is not possible. Number of columns of first matrix must equal number of rows of second matrix.");
    }

    $result = array_fill(0, $rows1, array_fill(0, $cols2, 0));

    for ($i = 0; $i < $rows1; $i++) {
        for ($j = 0; $j < $cols2; $j++) {
            for ($k = 0; $k < $cols1; $k++) {
                $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
            }
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
    [1, 2],
    [3, 4]
];

$matrix2 = [
    [5, 6],
    [7, 8]
];

$matrix3 = [
    [2, 0],
    [1, 3]
];

// Multiply matrices step by step
$tempResult = multiplyMatrices($matrix1, $matrix2);
$finalResult = multiplyMatrices($tempResult, $matrix3);

// Print result
echo "Product of matrices:\n";
printMatrix($finalResult);
?>
