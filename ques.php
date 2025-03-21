<?php

echo "Choose an option:\n";
echo "1. Calculate Average\n";
echo "2. Exit\n";
echo "Enter your choice: ";

$choice = trim(fgets(STDIN)); // Read user input

switch ($choice) {
    case 1:
        echo "Enter the number of values: ";
        $count = (int) trim(fgets(STDIN));

        if ($count <= 0) {
            echo "Invalid number of values. Exiting...\n";
            break;
        }

        $sum = 0;
        for ($i = 1; $i <= $count; $i++) {
            echo "Enter value $i: ";
            $num = (float) trim(fgets(STDIN)); // Read each number
            $sum += $num;
        }

        $average = $sum / $count;
        echo "The average is: " . number_format($average, 2) . "\n";
        break;

    case 2:
        echo "Exiting program...\n";
        break;

    default:
        echo "Invalid choice. Please select 1 or 2.\n";
        break;
}
?>