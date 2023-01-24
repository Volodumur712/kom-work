<?php
$servername = "localhost";
     $database = "122";
     $username = "root";
     $password = "";

     // заблокована
    //  $servername = "sql11.freemysqlhosting.net";
    //  $database = "sql11591844";
    //  $username = "sql11591844";
    //  $password = "rPP8UYAFSx"; 

    //  $servername = "localhost";
    //  $database = "122";
    //  $username = "root";
    //  $password = ""; 
    
    // створення зєднання
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }