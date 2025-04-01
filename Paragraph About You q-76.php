<?php
$file = fopen("about_me.txt", "w"); // Open the file in write mode
$text = "My name is Kritika. I am passionate about cybersecurity and programming.
I love exploring new technologies and working on projects that enhance my skills.\n";
$text .= "This program is written by Kritika ERP-067.";
fwrite($file, $text);
fclose($file);
echo "File 'about_me.txt' has been created successfully.<br>";
echo "This program is written by Kritika ERP-067.";
?>
