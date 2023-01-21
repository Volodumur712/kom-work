<?php
$servername = "sql11.freemysqlhosting.net";
    $database = "sql11591844";
    $usernamy = "sql11591844";
    $password = "rPP8UYAFSx"; 
    // створення зєднання
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }