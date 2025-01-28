<?php
function isArmstrong($number) {
    $digits = strlen($number);  
    $sum = 0;
    $temp = $number;

   
    while ($temp > 0) {
        $digit = $temp % 10;  
        $sum += pow($digit, $digits);
        $temp = (int)($temp / 10);  
    }

    return $sum == $number;  
}


$number = 153;

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "<br>";
    

echo "This program is written by KRITIKA ERP-067";

?>
