<?php
// Input number
$number = 153; // You can change this number

// Find the number of digits
$num_digits = strlen((string)$number);

// Initialize sum
$sum = 0;
$temp = $number;

// Calculate the sum of the digits raised to the power of the number of digits
while ($temp > 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $num_digits);
    $temp = (int)($temp / 10);
}

// Check if the sum is equal to the original number
if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "<br>"; 

echo "This program is written by KRITIKA ERP-067";

?>
