<?php
// Define two 2x2 matrices
$matrix1 = array(
    array(10, 20),
    array(30, 40)
);

$matrix2 = array(
    array(2, 4),
    array(5, 8)
);

// Result matrix
$result = array();

echo "<h3>Matrix Division (Element-wise)</h3>";

for ($i = 0; $i < count($matrix1); $i++) {
    for ($j = 0; $j < count($matrix1[0]); $j++) {
        if ($matrix2[$i][$j] != 0) {
            $result[$i][$j] = $matrix1[$i][$j] / $matrix2[$i][$j];
        } else {
            $result[$i][$j] = "Infinity"; // Avoid division by zero
        }
    }
}

// Print the result
echo "<pre>";
print_r($result);
echo "</pre>";
?>
