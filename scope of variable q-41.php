<?php

$greet = "";  // Declare $greet globally

function test(){
    global $greet;  // Access the global variable
    $greet = "hello world";
    echo $greet;
}

test();  
echo $greet;  
echo " this program is written by kritika erp-067";
?>
