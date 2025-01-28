<?php
// Function to print Fibonacci series
function fibonacci($n) {
    $first = 0;
    $second = 1;

    echo "Fibonacci Series up to $n terms: ";

    for ($i = 0; $i < $n; $i++) {
        echo $first . " ";
        $next = $first + $second;
        $first = $second;
        $second = $next;
    }
}

// Input number of terms
$terms = 10; // You can change this number

// Output the Fibonacci series
fibonacci($terms);
echo "<br>"; 

echo "This program is written by KRITIKA ERP-067";

?>
