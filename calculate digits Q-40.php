<?php
// Function to calculate number of digits
function countDigits($number) {
    // Convert the number to a string and return its length
    return strlen(abs($number));  // abs() ensures it works with negative numbers
}

// Example usage
$number = 12345;  // Change this to any number you want
echo "The number of digits in $number is: " . countDigits($number);
echo "<br>";
    echo "This program is written by KRITIKA ERP-067";

?>
