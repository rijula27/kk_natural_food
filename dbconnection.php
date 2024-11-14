<?php

// $servername = "localhost"; 
//     $username = "root"; 
//     $password = ""; 
//     $dbname = "kk_natural_food"; 

    // Create connection
    $conn = new mysqli("localhost", "root", "", "kk_natural_food");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        header("connection failed");
    }

?>