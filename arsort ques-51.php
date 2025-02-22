<!DOCTYPE html>
<html lang="en"> 
<head> 
    <title>Sorting PHP Associative Array in Ascending Order by Key</title> 
</head> 
<body> 
    <?php 
    // Define array 
    $age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);

    // Sorting array by key in ascending order
    ksort($age);

    // Printing sorted array
    echo "<h3>Sorted Ages in Ascending Order by Key:</h3>";
    foreach ($age as $name => $value) {
        echo "$name: $value <br>";
    }

    // Adding the requested message
    echo "<br>This program is written by KRITIKA ERP-067<br>";
    ?>
</body> 
</html>
