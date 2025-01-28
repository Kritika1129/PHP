<?php
// Input numbers
$num1 = 36; // You can change this number
$num2 = 60; // You can change this number

// Find the HCF using a loop
while ($num1 != $num2) {
    if ($num1 > $num2) {
        $num1 -= $num2;
    } else {
        $num2 -= $num1;
    }
}

// Output the HCF
echo "The HCF of the numbers is: $num1";
echo "<br>"; 

echo "This program is written by KRITIKA ERP-067";

?>
