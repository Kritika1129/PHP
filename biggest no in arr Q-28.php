

<?php
$Arr = array(1, 2, 3, 4, 5); 
var_dump($Arr); 


$largest = $Arr[0]; 

for ($i = 1; $i < count($Arr); $i++) {
    if ($Arr[$i] > $largest) {
        $largest = $Arr[$i]; 
    }
}

echo "The largest number in the array is: " . $largest . "<br>";


for ($i = 0; $i < 5; $i++) {
    echo $i;  
    echo "<br>"; 
}


echo "This program is written by KRITIKA ERP-067";
?>
