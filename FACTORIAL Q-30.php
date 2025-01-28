<?php
// Function to calculate factorial
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Input number
$number = 5; // You can change this number

// Output the factorial
echo "Factorial of $number is " . factorial($number);
echo "<br>"; 

echo "This program is written by KRITIKA ERP-067";

?>
