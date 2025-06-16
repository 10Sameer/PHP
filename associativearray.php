<?php
// Associative Array with detailed student data
$students = [
    "Sameer" => [
        "roll" => 1,
        "class" => "12B",
        "marks" => [
            "Math" => 88,
            "Science" => 90,
            "English" => 84,
            "Computer" => 95
        ]
    ],
    "Messi" => [
        "roll" => 2,
        "class" => "12B",
        "marks" => [
            "Math" => 78,
            "Science" => 82,
            "English" => 80,
            "Computer" => 85
        ]
    ],
    "Ronaldo" => [
        "roll" => 3,
        "class" => "12B",
        "marks" => [
            "Math" => 65,
            "Science" => 70,
            "English" => 60,
            "Computer" => 75
        ]
    ]
];

// Function to calculate total, average and grade
function getStudentReport($student) {
    $marks = $student['marks'];
    $total = array_sum($marks);
    $average = $total / count($marks);

    // Assign Grade
    if ($average >= 90) {
        $grade = "A+";
    } elseif ($average >= 80) {
        $grade = "A";
    } elseif ($average >= 70) {
        $grade = "B";
    } elseif ($average >= 60) {
        $grade = "C";
    } else {
        $grade = "F";
    }

    return [
        "total" => $total,
        "average" => $average,
        "grade" => $grade
    ];
}

// Display student reports
foreach ($students as $name => $details) {
    $report = getStudentReport($details);
    echo "Name: $name<br>";
    echo "Roll No: " . $details['roll'] . "<br>";

}
?>
