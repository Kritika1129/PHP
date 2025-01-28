<?php
class greeting {
    public $str = "hello world!";

    function show_greeting() {
        return $this->str;  // Corrected "this->str"
    }
}

$message = new greeting();  // Corrected object instantiation

var_dump($message);  // Shows the object details
echo "<br>";
echo $message->show_greeting();  // Display the greeting message
echo "<br>";
echo "This program is written by KRITIKA ERP-067";
?>
