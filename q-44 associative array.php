<?php
// Associative array to store subject marks
$marks = array(
    "Maths" => 85,
    "English" => 78,
    "Science" => 92,
    "History" => 74,
    "Computer" => 88
);

// Calculate total marks
$totalMarks = array_sum($marks);

// Number of subjects
$totalSubjects = count($marks);

// Calculate percentage
$percentage = ($totalMarks / ($totalSubjects * 100)) * 100;

// Display the results
echo "Marks in Subjects:<br>";
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark <br>";
}

echo "<br>Total Marks: $totalMarks <br>";
echo "Percentage: " . number_format($percentage, 2) . "%";
?>
