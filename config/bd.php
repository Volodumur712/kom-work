<?php
 $servername = "localhost";
     $database = "122";
     $username = "root";
     $password = "";

    // $servername = "localhost";
    // $database = "sql11591844";
    // $username = "root";
    // $password = ""; 
    
    // створення зєднання
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }