<?php

    // Setting a cookie
    setcookie("username", "Nripesh Nrip", time()+30*24*60*60);
    
    // Verifying whether a cookie is set or not
    if(isset($_COOKIE["username"])){
        echo "Hi " . $_COOKIE["username"] . "\n";
    } else{
        echo "Welcome Guest!\n";
    
    }
    
    print_r($_COOKIE);
echo "<p>This program is written by <strong>KRITIKA ERP-067</strong></p>";


?>