<?php

//  $servername = "sql207.epizy.com";
//     $database = "epiz_33448594_123";
//     $username = "epiz_33448594";
//     $password = "Pcgoy8OclCguS";


    // нова
    // $servername = "sql207.epizy.com";
    //  $database = "epiz_33448594_123";
    //  $username = "epiz_33448594";
    //  $password = "Pcgoy8OclCguS";

    
    // старт сесії 
    // session_start();


      $servername = "localhost";
      $database = "124";
      $username = "root";
      $password = ""; 

    
    // створення зєднання
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }