<?php
$file = fopen("example.txt", "r"); // Open the file in read mode
if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";
    }
    fclose($file);
} else {
    echo "Error opening the file.";
}
echo "<br>This program is written by Kritika ERP-067.";
?>
