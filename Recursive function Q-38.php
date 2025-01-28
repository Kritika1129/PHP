<?php
// Recursive function to print the given number
function printNumber($n) {
    // Base condition to stop recursion
    if ($n > 0) {
        echo $n . "<br>";  // Print the number
        printNumber($n - 1);  // Recursive call with the next number
    }
}

// Call the function with the desired number
printNumber(5);  // Change this number to print a different number
echo "<br>";
    echo "This program is written by KRITIKA ERP-067";


?>
