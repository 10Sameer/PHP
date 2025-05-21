<?php
// Define three 2x2 matrices
$matrix1 = array(
    array(1, 2),
    array(3, 4)
);

$matrix2 = array(
    array(5, 6),
    array(7, 8)
);

$matrix3 = array(
    array(9, 10),
    array(11, 12)
);

// Result matrix
$result = array();

// Add the matrices
for ($i = 0; $i < count($matrix1); $i++) {
    for ($j = 0; $j < count($matrix1[0]); $j++) {
        $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j] + $matrix3[$i][$j];
    }
}

// Display the result
echo "<h3>Result of Adding Three Matrices:</h3>";
echo "<pre>";
print_r($result);
echo "</pre>";
?>
