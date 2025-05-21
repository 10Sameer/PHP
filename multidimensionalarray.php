<?php
// Creating a multidimensional array
$students = array(
    array("Name" => "Alice", "Age" => 20, "Grade" => "A"),
    array("Name" => "Bob",   "Age" => 22, "Grade" => "B"),
    array("Name" => "Carol", "Age" => 19, "Grade" => "A+")
);

// Displaying the array content
echo "<h3>Student Details</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Age</th><th>Grade</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Age"] . "</td>";
    echo "<td>" . $student["Grade"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
